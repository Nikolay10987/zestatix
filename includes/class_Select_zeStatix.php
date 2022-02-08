<?php
if (  !defined(  'ABSPATH'  )  ) exit;

class Select_zeStatix {

	public function __construct() {
		add_action( 'wp_print_styles', array( $this, 'add_style_front' ) );

		add_action( 'wp_print_footer_scripts', array( $this, 'add_script_front' ) );

		add_action( 'wp_footer', array( $this, 'add_table' ) );
	}

	public function add_table() {
		require_once( INCLUDES_DIR_ZESTATIX . 'table_example.php' );
	}

	public function add_style_front() { ?>
		<style>
			#panel-zestatix, #panel-zestatix * {
				all: initial;
			}
			.table-example-zestatix {
				display: none;
			}
			#panel-zestatix .center-x-y-zestatix {
				position: absolute;
				top: 50%;
				left: 50%;
				-webkit-transform: translate( -50%,-50% );
					-ms-transform: translate( -50%,-50% );
						transform: translate( -50%,-50% );
			}
			.this-element-zestatix {
				cursor: progress !important;
				background-color: transparent;
				color: #333 !important;
				z-index: 99998 !important;

			}
			.this-element-zestatix:hover {
				animation: color-animation 3s linear 1;
			}
			@keyframes color-animation {
				10% {
					outline: 1px solid #1d66bb;
				}
			  to {
					background-color: #bcd5eb;
					outline: 1px solid #1d66bb;
				}
			}
			.not-confirmed-element-zestatix {
				background-color: #fc7169 !important;
				outline: 1px solid #dd345f !important;
				color: #333 !important;
				cursor: pointer !important;
				z-index: 99998 !important;
			}
			.selected-element-zestatix {
				background-color: #77aaf4 !important;
				outline: 2px solid #114787 !important;
				color: #333 !important;
				cursor: pointer !important;
				z-index: 99998 !important;
			}
			#panel-zestatix {
				position: fixed;
				left: -300px;
				z-index: 99999;
			}
			#panel-zestatix *:not( .dashicons ), #popup-zestatix * {
				font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
			}
			#panel-zestatix * {
				display: block;
				color: #28303d;
				box-sizing: border-box;
			}
			#panel-zestatix input::-webkit-input-placeholder, #panel-zestatix textarea::-webkit-input-placeholder {
				opacity: .5;
				-webkit-transition: 150ms opacity ease-in-out;
				transition: 150ms opacity ease-in-out;
			}
			#panel-zestatix input:-ms-input-placeholder, #panel-zestatix textarea:-ms-input-placeholder {
				opacity: .5;
				-ms-transition: 150ms opacity ease-in-out;
				transition: 150ms opacity ease-in-out;
			}
			#panel-zestatix input::-ms-input-placeholder, #panel-zestatix textarea::-ms-input-placeholder {
				opacity: .5;
				-ms-transition: 150ms opacity ease-in-out;
				transition: 150ms opacity ease-in-out;
			}
			#panel-zestatix input::-moz-placeholder, #panel-zestatix textarea::-moz-placeholder {
				opacity: .5;
				-moz-transition: 150ms opacity ease-in-out;
				transition: 150ms opacity ease-in-out;
			}
			#panel-zestatix input::placeholder, #panel-zestatix textarea::placeholder {
				opacity: .5;
				-webkit-transition: 150ms opacity ease-in-out;
				-o-transition: 150ms opacity ease-in-out;
				transition: 150ms opacity ease-in-out;
			}
			#panel-zestatix input:focus::-webkit-input-placeholder,
			#panel-zestatix textarea:focus::-webkit-input-placeholder {
				opacity: 0;
				-webkit-transition: 150ms opacity ease-in-out;
				transition: 150ms opacity ease-in-out;
			}
			#panel-zestatix input:focus::-moz-placeholder,
			#panel-zestatix textarea:focus::-moz-placeholder {
				opacity: 0;
				-moz-transition: 150ms opacity ease-in-out;
				transition: 150ms opacity ease-in-out;
			}
			#panel-zestatix input:focus:-moz-placeholder,
			#panel-zestatix textarea:focus:-moz-placeholder {
				opacity: 0;
				-moz-transition: 150ms opacity ease-in-out;
				transition: 150ms opacity ease-in-out;
			}
			#panel-zestatix input:focus:-ms-input-placeholder,
			#panel-zestatix textarea:focus:-ms-input-placeholder {
				opacity: 0;
				-ms-transition: 150ms opacity ease-in-out;
				transition: 150ms opacity ease-in-out;
			}
			#panel-zestatix input[type=text], #panel-zestatix textarea {
				width: 100%;
				font-size: 16px;
				background-color: #fff;
				border: 1px solid #ced4da;
			}
			#panel-zestatix input[type=text] {
				padding: 4px 6px;
				border-radius: 3px;
			}
			#panel-zestatix textarea {
				padding: 6px 6px 4px 6px;
				border-top-width: 0px;
				border-bottom-width: 0px;
			}
			#panel-zestatix .panel-selector-zestatix::-webkit-scrollbar-track,
			#sideNav::-webkit-scrollbar-track {
			  background-color: #c1c1c1;
			}
			#panel-zestatix .panel-selector-zestatix::-webkit-scrollbar,
			#sideNav::-webkit-scrollbar {
			  width: 7px;
			}
			#panel-zestatix .panel-selector-zestatix::-webkit-scrollbar-thumb,
			#sideNav::-webkit-scrollbar-thumb {
			  background-color: #737375;
			}
			@supports (-webkit-appearance: none) or (-moz-appearance: none) or (appearance: none) {
				 #panel-zestatix input[type='checkbox'], #panel-zestatix input[type='radio'] {
					 -webkit-appearance: none;
					 -moz-appearance: none;
					 appearance: none;
					 height: 21px;
					 outline: none;
					 display: inline-block;
					 vertical-align: top;
					 position: relative;
					 margin: 0;
					 cursor: pointer;
					 border: 1px solid #bbc1e1;
					 background-color: #fff;
					 transition: background-color .3s, border-color .3s;
				}
				 #panel-zestatix input[type='checkbox']:after, #panel-zestatix input[type='radio']:after {
					 content: '';
					 display: block;
					 left: 0;
					 top: 0;
					 position: absolute;
					 transition: transform .3s ease, opacity .2s;
				}
				 #panel-zestatix input[type='checkbox']:checked, #panel-zestatix input[type='radio']:checked {
					 background-color: #275efe;
					 border-color: #275efe;
					 transition: transform .6s cubic-bezier(0.2, 0.85, 0.32, 1.2), opacity .3s;
				}
				 #panel-zestatix input[type='checkbox']:disabled, #panel-zestatix input[type='radio']:disabled {
					 background-color: #e9ebf1;
					 cursor: not-allowed;
					 opacity: .9;
				}
				 #panel-zestatix input[type='checkbox']:hover:not(:checked):not(:disabled), #panel-zestatix input[type='radio']:hover:not(:checked):not(:disabled) {
					 border-color: #275efe;
				}
				 #panel-zestatix input[type='checkbox'], #panel-zestatix input[type='radio'] {
					 width: 21px;
				}
				 #panel-zestatix input[type='checkbox']:after, #panel-zestatix input[type='radio']:after {
					 opacity: 0;
				}
				 #panel-zestatix input[type='checkbox']:checked:after, #panel-zestatix input[type='radio']:checked:after {
					 opacity: 1;
				}
				 #panel-zestatix input[type='radio'] + label {
					 margin-left: 10px;
				}
				 #panel-zestatix input[type='checkbox'] {
					 border-radius: 3px;
				}
				 #panel-zestatix input[type='checkbox']:after {
					 width: 5px;
					 height: 9px;
					 border: 2px solid #fff;
					 border-top: 0;
					 border-left: 0;
					 left: 7px;
					 top: 4px;
					 transform: rotate( 20deg );
				}
				 #panel-zestatix input[type='checkbox']:checked:after {
					 transform: rotate( 43deg );
				}
				 #panel-zestatix input[type='radio'] {
					 border-radius: 50%;
				}
				 #panel-zestatix input[type='radio']:after {
					 width: 19px;
					 height: 19px;
					 border-radius: 50%;
					 background-color: #fff;
					 opacity: 0;
					 transform: scale( .7 );
				}
				 #panel-zestatix input[type='radio']:checked:after {
					 transform: scale( .5 );
				}
			}
			#popup-zestatix {
				display: none;
				position: absolute;
			}
			#popup-zestatix .popup-container-zestatix {
				z-index: 99999;
    		position: relative;
				background-color: #e6e8ef;
			  text-align: center;
		    border: 1px solid #8a8e98;
				border-radius: 4px;
			}
			#popup-zestatix .popup-container-zestatix > * {
				margin-top: 10px;
			}
			#popup-zestatix .popup-container-zestatix p {
			  display: inline-block;
			  width: 80%;
			  margin-bottom: 0px;
			}
			#popup-zestatix .popup-container-zestatix .popup-buttons-zestatix {
				padding: 0px;
			}
			#popup-zestatix .popup-container-zestatix .popup-buttons-zestatix div {
				display: inline-block;
			  width: 50%;
			  list-style: none;
			  margin: 0px;
			}
			#popup-zestatix .popup-container-zestatix .popup-buttons-zestatix div a {
			  display: block;
			  cursor: pointer;
				text-align: center;
			  height: 60px;
			  line-height: 60px;
			  text-transform: uppercase;
			}
			#popup-zestatix .popup-container-zestatix .popup-buttons-zestatix div:first-child a {
			  background-color: #ff655c;
			  -webkit-border-radius: 0 0 0 4px;
			  border-radius: 0 0 0 4px;
			}
			#popup-zestatix .popup-container-zestatix .popup-buttons-zestatix div:last-child a {
			  background-color: #c0c7d5;
			  -webkit-border-radius: 0 0 4px 0;
			  border-radius: 0 0 4px 0;
			}
			#panel-zestatix .panel-selector-zestatix .dashicons {
				font-family: dashicons;
				display: inline-block;
				font-weight: 400;
				font-style: normal;
				speak: never;
				text-decoration: inherit;
				text-transform: none;
				text-rendering: auto;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
				width: 20px;
				height: 20px;
				font-size: 20px;
				text-align: center;
			}
			#control-panel-zestatix {
				z-index: 99999;
			  position: fixed;
				top: 50%;
			  transform: translateY(-50%);
				left: -300px;
				margin-left: 305px;
			}
			#control-panel-zestatix > span:not( :last-child ) {
				margin-bottom: 5px;
			}
			#control-panel-zestatix span {
				display: block;
				cursor: pointer;
				font-family: dashicons;
				width: 60px;
			  height: 60px;
				font-size: 40px;
			  background-color: #b1b2b4;
			  border-radius: 50%;
			  line-height: 60px;
			  text-align: center;
			  opacity: .5;
				box-shadow: inset -2px -1px 4px 0 #5e5c5c;
				transition: opacity .3s;
			}
			#control-panel-zestatix > span:hover {
				opacity: .8;
			}
			#toggler-panel-selector-zestatix::before {
				display: inline-block;
				-moz-transform:rotate(180deg);
			  -webkit-transform:rotate(180deg);
			  transform:rotate(180deg);
				-moz-transition: all .5s linear;
				-webkit-transition: all .5s linear;
				transition: all .5s linear;
			}
			#toggler-panel-selector-zestatix.close-zestatix::before {
			  -moz-transform:rotate(360deg);
			  -webkit-transform:rotate(360deg);
			  transform:rotate(360deg);
			}
			#panel-zestatix .panel-selector-zestatix {
				height: 100vh;
				display: inline-block;
				background: #ecedef;
				width: 300px;
				padding: 20px 20px;
		    left: 0;
		    right: 0;
		    overflow-x: hidden;
		    overflow-y: auto;
			}
			#panel-zestatix .panel-selector-zestatix > *:not( :last-child ) {
				padding-bottom: 20px;
			}
			#panel-zestatix .panel-selector-zestatix .content-zestatix {
				padding-left: 20px;
			}
			#panel-zestatix .panel-selector-zestatix .content-label-zestatix {
				cursor: default;
				margin-bottom: 10px;
				font-size: 16px;
				font-weight: 600;
			}
			#panel-zestatix .panel-selector-zestatix .selector-zestatix .content-label-zestatix {
				display: inline-block;
			}
			#panel-zestatix .panel-selector-zestatix .selector-length-zestatix {
				cursor: default;
			}
			#panel-zestatix .panel-selector-zestatix .helper-zestatix {
				cursor: pointer;
				width: 30px;
		    height: 30px;
		    text-align: center;
		    border-radius: 50%;
		    background-color: #b1b2b4;
		    line-height: 30px;
				display: inline-block;
		    position: absolute;
		    right: 0;
		    bottom: 4px;
				transition: background-color .3s;
			}
			#panel-zestatix .panel-selector-zestatix .helper-active-zestatix {
				background-color: #f65757;
			}
			#panel-zestatix .table-zestatix.table-example-zestatix {
				width: 100%;
				margin-top: 10px;
			}
			#panel-zestatix .table-zestatix.table-example-zestatix tr {
				display: table-row;
			}
			#panel-zestatix .table-zestatix.table-example-zestatix th {
				height: 30px;
			}
			#panel-zestatix .table-zestatix.table-example-zestatix tr:nth-child(odd) {
				background-color: #bbbdc0;
			}
			#panel-zestatix .table-zestatix.table-example-zestatix tr:nth-child(even) {
				background-color: #fff;
			}
			#panel-zestatix .table-zestatix.table-example-zestatix th,
			#panel-zestatix .table-zestatix.table-example-zestatix td {
				display: table-cell;
				word-break: break-word;
				width: 50%;
				padding: 5px;
				vertical-align: middle;
			}
			#panel-zestatix .parent-selector-length-zestatix {
				border: 1px solid #ced4da;
				border-bottom-width: 0px;
				transition: background-color .3s;
			}
			#panel-zestatix .selector-input-zestatix {
				width: 100%;
				resize: none;
				word-break: break-all;
			}
			#panel-zestatix .primary-zestatix {
			    color: #004085;
			    background-color: #cce5ff;
			}
			#panel-zestatix .danger-zestatix {
				background-color: #f8d7da;
			}
			#panel-zestatix .alert-zestatix {
				position: relative;
				height: 30px;
			  width: 100%;
			  -webkit-border-radius: 5px 5px 0px 0px;
			  border-radius: 5px 5px 0px 0px;
			}
			#panel-zestatix .danger-selector-zestatix {
				display: none;
				margin-top: 10px;
			  padding: 20px;
			  border: 1px solid #f5aab1;
			  border-radius: 5px;
			}
			#panel-zestatix .control-selector-zestatix {
				position: relative;
				border: 1px solid #ced4da;
				border-bottom-right-radius: 3px;
			  border-bottom-left-radius: 3px;
			  text-align: center;
			  border-top-width: 0;
			  height: 30px;
			}
			#panel-zestatix .characters-zestatix, #panel-zestatix .max-characters-zestatix {
				cursor: default;
				display: inline-block;
				font-size: 14px;
			  line-height: 30px;
			}
			#panel-zestatix .dashicons-trash {
				cursor: pointer;
				line-height: 30px;
			  vertical-align: top;
			}
			#panel-zestatix label {
				cursor: default;
				font-size: 14px;
			}
			#panel-zestatix .unit-control-zestatix {
				display: flex;
				align-items: center;
			}
			#panel-zestatix .unit-control-zestatix input {
				flex-shrink: 0;
			}
			#panel-zestatix .content-zestatix .unit-control-zestatix:not( :last-child ) {
				margin-bottom: 5px;
			}
			#panel-zestatix .unit-control-zestatix label {
				cursor: pointer;
				word-break: break-all;
			}
			#panel-zestatix .subdirectories-zestatix {
				cursor: pointer;
				transform: scale(-1, 1);
				margin: 0px 6px;
			}
			#panel-zestatix .subdirectories-active-zestatix {
				color: #007bff;
			}
			#panel-zestatix .disable-zestatix {
				cursor: not-allowed !important;
				color: #999eb4;
			}
			#panel-zestatix .custom-width-zestatix {
				display: none;
				margin: 10px 0px 0px 20px;
			}
			#panel-zestatix .custom-width-zestatix div * {
				display: inline-block;
			}
			#panel-zestatix .custom-width-zestatix div:not(:last-child) {
				margin-bottom: 10px;
			}
			#panel-zestatix .custom-width-zestatix div input {
				width: 60px;
			}
			#panel-zestatix .custom-width-zestatix div label:first-child {
				width: 50px;
			}
			#panel-zestatix .custom-width-zestatix div label:last-child {
				margin-left: 10px;
			}
		</style>
	<?php }

	public function add_script_front() { ?>
		<script>
			jQuery( document ).ready( function( $ ) {
				'use strict';

				const ajaxurl = '<?= admin_url('admin-ajax.php') ?>',

					url_zestatix = '<?= esc_url( self_admin_url( 'plugins.php?page=zestatix' ) ) ?>';

				let obj_data = <?= ( int ) get_option( 'zestatix_panel_ready' ) ?>,

					toggler_beforeunload = true,

					msg_error = '',

					panel_body = `<div id="panel-zestatix"></div>
						<div id="control-panel-zestatix">
							<span id="save-panel-zestatix" class="dashicons dashicons-yes"></span>
							<span id="toggler-panel-selector-zestatix" class="dashicons dashicons-arrow-right-alt2 close-zestatix"></span>
							<span id="escape-select-zestatix" class="dashicons dashicons-no-alt"></span>
						</div>
						<div id="popup-zestatix">
							<div class="popup-container-zestatix">
								<p><?php esc_html_e( 'Are you sure you want to track this element?', 'zestatix' ) ?></p>
								<div class="popup-buttons-zestatix">
									<div><a>Yes</a></div><div><a>No</a></div>
								</div>
							</div>
						</div>`;

				$( panel_body ).prependTo( 'body' );

				if ( obj_data ) {
					let get_data = setInterval( function() {
						$.post( ajaxurl, { action: 'get_data_select_panel_zestatix' }, function( data ) {
							obj_data = JSON.parse( data )
						} );

						if ( typeof obj_data == 'object' ) {
							clearInterval( get_data );

							$.post( ajaxurl, { action: 'del_data_select_panel_zestatix' } );

							add_panel( obj_data )
						}
					}, 200 );
				} else {
					add_panel()
				}

				function add_panel( data = {} ) {
					let html = '<div class="panel-selector-zestatix">' + name_element( data.name || '' ) + input_selector( data.selector || '' ) + track_on( data.track_on || '' ) + browser_width( data.browser_width || ''  ) + '</div>';

					$( html ).prependTo( '#panel-zestatix' );

					if ( data?.selector && valid_selector( data.selector ) ) add_class_selected_element( data.selector );

					if ( $( '.subdirectories-active-zestatix:visible' ).length ) checked_track_on( $( '.subdirectories-active-zestatix:visible' ) );

					if ( data?.browser_width?.type == 'custom width' ) $( '.input-width-zestatix[value="custom width"]' ).trigger( 'click' );

					$( '#toggler-panel-selector-zestatix.close-zestatix' ).trigger( 'click' );

					obj_data = {};

					textarea_height()
				}

				function name_element( data = '' ) {
					return `<div class="name-element-zestatix">
						<label class="content-label-zestatix"><?php esc_html_e( 'NAME', 'zestatix' ) ?></label>
						<div class="content-zestatix">
							<input name="name" type="text" class="input-zestatix" value="${ ( data.length ) ? data : '' }" placeholder="<?php esc_html_e( 'enter name', 'zestatix' ) ?>">
						</div>
					</div>`
				}

				function browser_width( data = {} ) {
					let width_options = { 'any width': '<?php esc_html_e( 'any width', 'zestatix' ) ?>',
						'custom width': '<?php esc_html_e( 'custom width', 'zestatix' ) ?>' },

						html_return = `<div class="width-zestatix">
							<label class="content-label-zestatix"><?php esc_html_e( 'BROWSER WIDTH', 'zestatix' ) ?></label>
							<div class="content-zestatix">`,

						data_length = ( Object.keys( data ).length ) ? true : false,

						min_width = ( data_length && data?.min ) ? data.min : '',

						max_width = ( data_length && data?.max ) ? data.max : '';

					$.each( width_options, function( i, v ) {
						html_return += `<div class="unit-control-zestatix">
							<input name="browser_width/type" class="input-width-zestatix" type="radio" value="${ i }" ${ ( data_length && v == data.type ) ? 'checked' : '' }>
							<label class="label-zestatix">${ v }</label>
						</div>`
					} );

					html_return += `<div class="custom-width-zestatix">
						<div>
							<label>min</label>
							<input type="text" name="browser_width/min" value="${ min_width }">
							<label>px</label>
						</div>
						<div>
							<label>max</label>
							<input type="text" name="browser_width/max" value="${ max_width }">
							<label>px</label>
						</div>
					</div></div></div>`;

					return html_return
				}

				function input_selector( value = '' ) {
					let elm_length = ( value.length ) ? element_selected_length( value ) : 0,

						add_class = ( elm_length > 0 ) ? 'primary-zestatix' : '';

					return '<div class="selector-zestatix"><div style="position:relative"><label class="content-label-zestatix"><?php esc_html_e( 'SELECTOR', 'zestatix' ) ?> jQuery( \'</label><span class="helper-zestatix" title="<?php esc_html_e( 'SHOW EXAMPLE', 'zestatix' ) ?>">?</span></div><div class="content-zestatix"><div><div class="parent-selector-length-zestatix alert-zestatix ' + add_class + '"><span class="selector-length-zestatix center-x-y-zestatix">' + elm_length + ' <?php esc_html_e( 'selected', 'zestatix' ) ?>' + '</span></div><textarea name="selector" class="selector-input-zestatix input-zestatix" wrap="soft" placeholder="<?php esc_html_e( 'enter selector', 'zestatix' ) ?>">' + value + '</textarea><div class="control-selector-zestatix"><span class="characters-zestatix">' + value.length + '</span><span class="max-characters-zestatix">&nbsp/ 255</span><span class="dashicons dashicons-trash" title="<?php esc_html_e( 'clear selector', 'zestatix' ) ?>"></span></div></div><div class="danger-zestatix danger-selector-zestatix"></div></div></div>'
				}

				function track_on( data = false ) {
					let track_on = location.href.split( '://' )[1].match( /(.*?\/)/g ),

						html_return = '<div class="track-zestatix"><label class="content-label-zestatix"><?php esc_html_e( 'TRACK ON', 'zestatix' ) ?></label><div class="content-zestatix">',

						val_input = '';

					$.each( track_on, function( i, v ) {
						val_input += v;

						let checked = '',
							subdir_active= '';

						if ( data ) {
							for ( let path in data ) {
								if ( path == val_input ) {
									checked = 'checked';

									if ( data[ path ][ 'subdirectories' ] == 1 ) {
										subdir_active = 'subdirectories-active-zestatix'
									}

									delete data[ path ]
								}
							}
						}

						html_return += '<div class="unit-control-zestatix"><input name="track_on" class="input-track-on-zestatix" type="checkbox" value="' + val_input + '" ' + checked + '/><span class="dashicons dashicons-editor-break subdirectories-zestatix ' + subdir_active + '" title="<?php esc_html_e( 'SUBDIRECTORIES: DISABLED', 'zestatix' ) ?>"></span><label class="label-zestatix" title="' + decodeURI( val_input ) + '">' + decodeURI( v.slice( 0, -1 ) ) + '</label></div>'
					} );

					html_return += '</div></div>';

					if ( data && Object.keys( data ).length ) return tracked( data, html_return );
					else return html_return;
				}

				function tracked( data, html_return ) {
					html_return += '<div class="tracked-zestatix"><label class="content-label-zestatix"><?php esc_html_e( 'TRACKED', 'zestatix' ) ?></label><div class="content-zestatix">';

					$.each( data, function( path, subdr ) {
						let subdir_active = '';

						if ( data[ path ][ 'subdirectories' ] == 1 ) {
							subdir_active = 'subdirectories-active-zestatix'
						}

						html_return += '<div class="unit-control-zestatix"><input name="track_on" class="input-track-on-zestatix" type="checkbox" value="' + path + '" checked/><span class="dashicons dashicons-editor-break subdirectories-zestatix ' + subdir_active + '" title="<?php esc_html_e( 'SUBDIRECTORIES: DISABLED', 'zestatix' ) ?>"></span><label class="label-zestatix" title="' + decodeURI( path ) + '">' + decodeURI( path.slice( 0, -1 ) ) + '</label></div>'
					} );

					html_return += '</div></div>';

					return html_return
				}

				let hover_element,

					delay_timer,

					select_element;

				$( document.body )
					.on( 'mouseover', '*', function( event ) {
						event.stopImmediatePropagation();

						if ( reject_elements( $( this ) ) || $( this ).hasClass( 'not-confirmed-element-zestatix' ) || $( this ).hasClass( 'selected-element-zestatix' ) ) return;

						hover_element = $( this );

						delay_timer = setTimeout( function() {
							select_element = hover_element;

							select_element.addClass( 'this-element-zestatix' );

							$.data( select_element, 'timer',
								setTimeout( $.proxy(
									function() {
										if ( !select_element.hasClass( 'this-element-zestatix' ) ) return;

										$( '.not-confirmed-element-zestatix' ).removeClass( 'not-confirmed-element-zestatix' );

										$( '.this-element-zestatix' ).addClass( 'not-confirmed-element-zestatix' );

										add_popup( $( '.this-element-zestatix' ).get( 0 ) )
									},
								select_element ), 2800 )
							)
						}, 200 )
					} )

					.on( 'mouseout', '*', function( event ) {
						if ( !hover_element ) return;

						clearTimeout( delay_timer );

						clearTimeout( $.data( hover_element, 'timer' ) );

						$( this ).removeClass( 'this-element-zestatix' )
					} )

					.on( 'click', '.popup-buttons-zestatix a', function(event) {
						if ( $( this ).text() == 'Yes' ) {
							let element = $( '.not-confirmed-element-zestatix ' ).clone().removeClass( 'not-confirmed-element-zestatix selected-element-zestatix' ),

								obj = {
									selector: create_selector( create_obj_attributes( element ) )
								};

							$( '.selected-element-zestatix' ).removeClass( 'selected-element-zestatix' );

							$( '.panel-selector-zestatix' ).css( { 'display': 'none' } );

							add_panel( obj );

							$( '.not-confirmed-element-zestatix ' ).removeClass( 'not-confirmed-element-zestatix' );
						} else {
							$( '.not-confirmed-element-zestatix' ).removeClass( 'not-confirmed-element-zestatix' )
						}

						$( '#popup-zestatix' ).fadeToggle( 300, function() {
							$( this ).css( { left:0, top:0 } )
						} )
					} )

					.on( 'input', '.selector-input-zestatix', function() {
						let selector = $( this ).val();

						$( '.selected-element-zestatix' ).removeClass( 'selected-element-zestatix' );

						textarea_height();

						if ( selector.length && valid_selector( selector ) ) {
							add_class_selected_element( selector );

							update_info_selected( element_selected_length( $( selector ) ) );

							return
						}

						if ( !selector.length ) valid_selector( '' );

						update_info_selected( 0 )
					} )

					.on( 'click', '.input-track-on-zestatix:not( :disabled )', function() {
						let subdirectories = $( this ).siblings( '.subdirectories-zestatix' );

						if ( !$( this ).is( ':checked' ) && subdirectories.hasClass( 'subdirectories-active-zestatix' ) ) subdirectories.trigger( 'click' )
					} )

					.on( 'click', '.subdirectories-zestatix:not( .disable-zestatix )', function() {
						let sibling_checkbox = $( this ).siblings( '.input-track-on-zestatix' ),

							check_class = $( this ).toggleClass( 'subdirectories-active-zestatix' ).hasClass( 'subdirectories-active-zestatix' );

						if ( check_class ) {
							if ( !sibling_checkbox.is( ':checked' ) ) sibling_checkbox.trigger( 'click' );

							$( this ).attr( 'title', '<?php esc_html_e( 'SUBDIRECTORIES: ENABLED', 'zestatix' ) ?>' )
						} else {
							$( this ).attr( 'title', '<?php esc_html_e( 'SUBDIRECTORIES: DISABLED', 'zestatix' ) ?>' )
						}

						if ( $( this ).parentsUntil( '.track-zestatix' ) ) checked_track_on( $( this ) )
					} )

					.on( 'click', '.control-selector-zestatix .dashicons-trash', function() {
						let input_selector = $( this ).parents( '.content-zestatix' ).find( '.selector-input-zestatix' );

						input_selector.val( '' ).trigger( 'input' )
					} )

					.on( 'click', '.input-width-zestatix', function() {
						if ( $( this ).val() == 'custom width' ) {
							$( '.custom-width-zestatix' ).slideDown( 300 )
						} else {
							$( '.custom-width-zestatix' ).slideUp( 300 )
						}
					} )

					.on( 'click', '.helper-zestatix', function() {
						let table_example = $( '.table-example-zestatix' ),

							find_table_child = $( this ).parents( '.selector-zestatix' ).find( table_example ).length,

							check_class = $( this ).toggleClass( 'helper-active-zestatix' ).hasClass( 'helper-active-zestatix' );

						if ( !find_table_child ) {
							$( table_example ).hide().appendTo( '.selector-zestatix:visible .content-zestatix' )
						}

						if ( check_class ) {
							$( this ).attr( 'title', '<?php esc_html_e( 'hide example', 'zestatix' ) ?>' )
						} else {
							$( this ).attr( 'title', '<?php esc_html_e( 'show example', 'zestatix' ) ?>' )
						}

						$( table_example ).fadeToggle( 600, 'linear' )
					} )

					.on( 'click', '.label-zestatix', function() {
						$( this ).siblings( 'input:not( :disabled )' ).trigger('click')
					} )

				function checked_track_on( element ) {
					let sibling_checkbox = element.siblings( '.track-zestatix .input-track-on-zestatix' ),

						idx_input = sibling_checkbox.index( '.input-track-on-zestatix:visible' ),

						checkbox_idx_greater = $( '.track-zestatix .input-track-on-zestatix:visible:gt( ' + idx_input + ' )' ),

						checked_checkbox_idx_greater = $( '.track-zestatix .input-track-on-zestatix:visible:gt( ' + idx_input + ' ):checked' ),

						subdr_idx_greater = $( '.track-zestatix .subdirectories-zestatix:visible:gt( ' + idx_input + ' )' ),

						label_idx_greater = $( '.track-zestatix .label-zestatix:visible:gt( ' + idx_input + ' )' );

					if ( element.hasClass( 'subdirectories-active-zestatix' ) ) {
						checked_checkbox_idx_greater.trigger( 'click' );

						checkbox_idx_greater.prop( 'disabled', true );

						$( subdr_idx_greater ).add( label_idx_greater ).addClass( 'disable-zestatix' );

						element.prop( 'title', '<?php esc_html_e( 'SUBDIRECTORIES: ENABLED', 'zestatix' ) ?>' )
					} else {
						checkbox_idx_greater.prop( 'disabled', false );

						$( subdr_idx_greater ).add( label_idx_greater ).removeClass( 'disable-zestatix' );

						element.prop( 'title', '<?php esc_html_e( 'SUBDIRECTORIES: DISABLED', 'zestatix' ) ?>' )
					}
				}

				function reject_elements( elem ) {
					let reject_elem = ['#popup-zestatix', '#wpadminbar', '#panel-zestatix', '#control-panel-zestatix'],

						toggler = false;

					$( reject_elem ).each( function( i, selector ) {
						if ( $( elem ).closest( selector ).length ) {
							toggler = true;

							return
						}
					} );

					return toggler
				}

				function element_selected_length( elm ) {

					elm = encode_href( elm );

					return $( elm ).filter( ( i, e ) => !reject_elements( e ) ).length
				}

				function add_popup( elem ) {
					let elem_screen_top = elem.getBoundingClientRect().top,

						elem_position_left = $( elem ).offset().left,

						elem_position_top = $( elem ).offset().top,

						elem_width = $( elem ).outerWidth(),

						elem_height = $( elem ).outerHeight(),

						popup_height = $( '#popup-zestatix' ).height(),

						popup_width = $( '#popup-zestatix' ).width(),

						browser_height = document.documentElement.clientHeight,

						browser_width = window.screen.width,

						margin_popup = 10,

						popup_left = elem_position_left + (elem_width / 2) - (popup_width / 2),

						popup_top = parseInt( ( elem_screen_top >= popup_height + margin_popup ) ? elem_position_top - popup_height - margin_popup : elem_position_top + $( elem ).outerHeight() + margin_popup );

					popup_left = (popup_left + popup_width > browser_width) ? browser_width - popup_width : popup_left;

					popup_left = parseInt((popup_left >= 0) ? popup_left : 0);

					popup_top = ( elem_height + popup_height > browser_height ) ? $( window ).scrollTop() + (browser_height / 2) - (popup_height / 2) : popup_top;

					if ( $( '#popup-zestatix' ).is( ':visible' ) ) {
						$( '#popup-zestatix' ).fadeOut( 300, function() {
							$( this ).css( { left:0, top:0 } ).offset( { top:popup_top, left:popup_left } ).fadeIn( 300 )
						})
					} else {
						$( '#popup-zestatix' ).offset( { top:popup_top, left:popup_left } ).fadeIn( 300 )
					}
				}

				function create_selector( attributes ) {
					let str_selector = '';

					if ( Object.keys( attributes ).length ) {
						$.each( attributes, function( k, v ) {
							if ( v.length ) {
								if ( k == 'tag' ) {
									str_selector = v += str_selector
								} else if ( k == 'id' ) {
									str_selector += '#' + v
								} else if ( k == 'class' ) {
									$.each( v, function( ind, val ) {
										str_selector += '.' + val
									} );
								} else if ( k == 'text' ) {
									str_selector += ':contains(' + v + ')'
								} else if ( k == 'paragraph' ) {
									$.each( v, function( ind, val ) {
										str_selector += ':contains(' + val + ')'
									} )
								} else {
									str_selector += '[' + k + '="' + v + '"]'
								}
							}
						}
					) }

					return decode_href( str_selector )
				}

				function create_obj_attributes( element ) {
					let obj_attributes = {};

					obj_attributes['tag'] = element[0].nodeName.toLowerCase();

					let val_text = $.trim( element.contents().text() ).replace( /[\(\)']/g, '\\$&' );

					if ( val_text.length > 0 ) {
						if ( /\s{2,}/.test( val_text ) ) {
							obj_attributes['paragraph'] = val_text.split(/\s{2,}/)
						} else {
							obj_attributes['text'] = val_text
						}
					}

					$.each( element[0].attributes, function( index, attr ) {
						if ( attr.nodeValue.length > 0
							 && attr.nodeName != 'style'
							 && attr.nodeName != 'target'
							 && attr.nodeName != 'title' ) {

							obj_attributes[attr.nodeName] = ( function () {
								if ( attr.nodeName === 'id' || attr.nodeName === 'class' ) {
									attr.nodeValue = attr.nodeValue.replace( /[^\-\w\s]/g, '\\$&' )
								} else {
									attr.nodeValue = attr.nodeValue.replace( /"/g, '\\"' )
								}

								if ( attr.nodeName == 'class' ) {
									return attr.nodeValue.split( ' ' )
								} else {
									return attr.nodeValue
								}
							} () )
						}
					} );

					return obj_attributes;
				}

				function decode_href( str ) {
					let reg_ex = /(\[href=")(.+?)("\])/;

					if ( reg_ex.test( str ) ) {
						 str = str.replace( reg_ex, ( match, p1, p2, p3 ) => p1 + decodeURI( p2 ) + p3 )
					}

					return str
				}

				function encode_href( str ) {
					let reg_ex = /(\[href=")(.+?)("\])/;

					if ( reg_ex.test( str ) ) {
						 str = str.replace( reg_ex, ( match, p1, p2, p3 ) => p1 + encodeURI( p2 ).toLowerCase() + p3 )
					}

					return str
				}

				function add_class_selected_element( selector ) {
					selector = encode_href( selector );

					$( 'body ' + selector ).filter(
						function( ind, elm ) {
							return !reject_elements( elm )
						}
					).addClass( 'selected-element-zestatix' )
				}

				function update_info_selected( q ) {
					$( '.selector-length-zestatix' ).text( q + ' selected' );

					if ( q == 0 ) {
						$( '.parent-selector-length-zestatix' ).removeClass( 'primary-zestatix' )
					} else {
						$( '.parent-selector-length-zestatix' ).addClass( 'primary-zestatix' )
					}
				}

				function valid_selector( value ) {
					msg_error = '';

					value = $.trim( value );

					let toggler_valid = true,

						danger_panel = $( '.panel-selector-zestatix:visible .danger-selector-zestatix' );

					if ( value.length > 255 ) {
						danger_panel.text( '<?php esc_html_e( 'maximum number of characters 255', 'zestatix' ) ?>' ).fadeIn( 300 );

						return false
					}

					if ( value.length ) {
						try {
			        let selector = $( value )
			      } catch( error ) {
							toggler_valid = false
			      }
					} else {
						danger_panel.fadeOut( 300 );

						return false
					}

					if ( !toggler_valid || value == '#' ) {
						msg_error = '<?php esc_html_e( 'wrong selector', 'zestatix' ) ?>';

						danger_panel.text( msg_error ).fadeIn( 300 );

						return false
					} else {
						danger_panel.fadeOut( 300 );

						return true
					}
				}

				function textarea_height() {
					const textarea = $( '.selector-input-zestatix:visible' );

					if ( textarea.length ) {
						textarea.height( 0 );

						textarea.height( textarea.prop( 'scrollHeight' ) );

						textarea.siblings( '.control-selector-zestatix' ).children( '.characters-zestatix' ).text( textarea.val().length )
					}
				}

				window.addEventListener( 'beforeunload', function(event) {
					if ( !toggler_beforeunload ) return;

					let obj = {
						action: 'set_data_select_panel_zestatix',
						panel_data: JSON.stringify( create_data() )
					}

					let data = new window.FormData();

					$.each( obj, function( key, value ) {
						data.append( key, value )
					} );

			  	window.navigator.sendBeacon( ajaxurl, data )
				} );

				function create_data() {
					let data = {};

					$( '#panel-zestatix [name]:visible:not( input[type="checkbox"] ):not( input[type="radio"] ), #panel-zestatix input:checked' ).each( function() {
						let val = $.trim( $( this ).val() );

						if ( val.length ) {
							let	path = $( this ).prop( 'name' ).split( '/' ),

								last_key = path.pop(),

								temp = path.reduce( ( acc, v ) => ( v in acc ) ? acc[ v ] : acc[ v ] = {}, data );

							if ( last_key == 'track_on' ) {
								if ( typeof temp[ last_key ] !== 'object' ) temp[ last_key ] = {};

								Object.assign( temp[ last_key ], {
									[ val ]: {
										'subdirectories': ( $( this ).siblings( '.subdirectories-zestatix' ).hasClass( 'subdirectories-active-zestatix' ) ) ? 1 : 0
									}
								} )
							} else {
								temp[ last_key ] = val
							}
						}
					} );

					return data
				}

				$( '#toggler-panel-selector-zestatix' ).click( function() {
					let panel_width = $( '.panel-selector-zestatix' ).outerWidth( true );

				  $( this ).toggleClass( 'close-zestatix' );

					$( '#panel-zestatix' ).add( '#control-panel-zestatix' ).animate( { left: ( $( '.panel-selector-zestatix' ).offset().left >= 0 ) ? 0 - panel_width : 0 }, 500 )
				} );

				$( '#save-panel-zestatix' ).click( function() {
					location.href = url_zestatix
				} );

				$( '#escape-select-zestatix' ).click( function() {
					$.post( ajaxurl, { action: 'exit_select_zestatix' }, function() {
							toggler_beforeunload = false;

							location.href = url_zestatix
					} )
				} );

				$.post( ajaxurl, { action: 'select_ready_zestatix' } );
			} )
		</script>
	<?php
	}
}
