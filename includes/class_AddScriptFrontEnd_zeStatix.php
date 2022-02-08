<?php
if ( !defined( 'ABSPATH' ) ) exit;

// AddFrontEndScript_zeStatix class add a script to the front-end to track the event.
class AddFrontEndScript_zeStatix {
	public function __construct() {
		$this->url = urldecode( $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );

		$this->active_elements = DB_zeStatix::get_elements_by_url( $this->url );

		if ( count($this->active_elements) ) {
			// geoPlugin is the easiest way for you to geolocate your visitors, allowing you to provide geolocalised content more relevant to their geographical location.
			// www.geoplugin.com
			wp_enqueue_script( 'geoplugin-for-zestatix', 'http://www.geoplugin.net/javascript.gp', '', null );

			add_action( 'wp_footer', array( $this, 'add_script' ), 40 );
		}
	}

	// Front-end script
	public function add_script() {	?>
		<script>
		jQuery( function( $ ) {
		    'use strict';

				let ajax_url_zestatix = '<?= admin_url( 'admin-ajax.php' ) ?>',

					location_zestatix = ( typeof geoplugin_countryName == 'function' && typeof geoplugin_city == 'function' ) ? escape_html_zestatix( geoplugin_countryName() + ', ' + geoplugin_city() ) : '',

					set_data_zestatix = [];

				<?php if ( empty( DB_zeStatix::get_user_id() ) ) { ?>
					set_data_zestatix.push( {
						action:	'add_user_zestatix',
						location: location_zestatix
					} );
				<?php } else { ?>
					<?php if ( empty( DB_zeStatix::get_user_location_by_ip() ) ) { ?>
						if ( location_zestatix.length ) {
							set_data_zestatix.push( {
								action:	'update_user_location_zestatix',
								location: location_zestatix
							} )
						}
					<?php } ?>
				<?php } ?>

		    <?php foreach( $this->active_elements as $element ) { ?>
					if ( $( '<?= $element[ 'selector' ] ?>' ).length ) {
						set_data_zestatix.push( {
							action: 'loaded_element_zestatix',
							element_id: +<?= json_encode( $element[ 'id' ] ) ?>,
							url: '<?= $this->url ?>'
						} )
					}

	        $( document ).on( 'mousedown', '<?= $element[ 'selector' ] ?>', { id: '<?= $element[ 'id' ] ?>', width: JSON.parse( '<?= json_encode( $element[ 'browser_width' ] ) ?>' ) }, ajax_event_zestatix );
		    <?php } ?>

				if ( set_data_zestatix.length ) {
					for ( const obj of set_data_zestatix ) {
						$.ajax( {
							type: 'POST',
							async: false,
							url: ajax_url_zestatix,
							data: obj
						} )
					}
				}

		    function ajax_event_zestatix( event ) {
	        event.stopPropagation();

	        if ( check_width_zestatix( event.data.width ) ) {
            $.ajax( {
	            type: 'POST',
	            url: ajax_url_zestatix,
	            data: {
                action:           'event_zestatix',
                zestatix: {
                  selector_id:    event.data.id,
									url:						'<?= $this->url ?>',
                  width:          ( window.screen.width == window.outerWidth ) ? String( window.screen.width ) : String( window.screen.width + ' / ' + window.outerWidth )
                }
	            }
            } )
	        }
		    }

		    function check_width_zestatix( data = {} ) {
          if ( data.type == 'any width' ) {
						return true
					} else {
						let min = + data.min,

							max = + data.max,

							window_width = document.documentElement.clientWidth;

						if ( ( min == 0 && max == 0 )
							|| ( max == 0 && min <= window_width )
							|| ( min == 0 && max >= window_width )
							|| ( min <= window_width && max >= window_width )
						) {
							return true
						}
					}

					return false
		    }

				function escape_html_zestatix( text ) {
					if ( typeof text == 'undefined' || !text.length ) {
						return '';
					} else {
						return text
							.replace( /&/g, '&amp;' )
							.replace( /</g, '&lt;' )
							.replace( />/g, '&gt;' )
							.replace( /"/g, '&quot;' )
							.replace( /'/g, '&#039;' )
						}
				}
		} )
		</script>
	<?php }
}
