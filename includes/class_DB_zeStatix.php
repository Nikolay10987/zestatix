<?php
if ( !defined( 'ABSPATH' ) ) exit;

class DB_zeStatix {
	public static function loaded_element( $id_elem, $url ) {
		global $wpdb;

		$wpdb->insert( $wpdb->prefix . 'zestatix_loaded',
			array( 'elem' => $id_elem, 'user' => self::get_user_id(), 'url' => self::get_url_id( $url ) ),
			array( '%d', '%d', '%d' )
		);
	}

	public static function add_event( $data ) {
		global $wpdb;

		$device = ( wp_is_mobile() ) ? 'mobile' : 'PC';

		$wpdb->insert( $wpdb->prefix . 'zestatix_event',
			array( 'selector_id' => $data['selector_id'], 'user_id' => self::get_user_id(), 'url_id' => self::get_url_id( $data[ 'url' ] ), 'device' => $device, 'width' => $data['width'] ),
			array( '%d', '%d', '%d', '%s', '%s' )
		);
	}

	public static function data_selectors() {
		if ( !current_user_can( 'edit_plugins' ) ) return;

		global $wpdb;

		$selectors = [];

		$query = $wpdb->get_results( "SELECT selector FROM {$wpdb->prefix}zestatix_element" );

		foreach ( $query as $selector ) {
			$selectors[] = $selector->selector;
		}

		return $selectors;
	}

	public static function update_elements( $post ) {
		if ( !current_user_can( 'edit_plugins' ) ) return;

		global $wpdb;

		$data_selectors = self::data_selectors();

		$post_selectors = [];

		$wpdb->query( "TRUNCATE {$wpdb->prefix}zestatix_url_tracking" );

		foreach ( $post as $element ) {
			if ( strlen( $element['selector'] ) === 0 ) {
				break;
			}

			if ( !in_array( $element['selector'], $data_selectors ) ) {
				$wpdb->query(
					$wpdb->prepare( "INSERT INTO {$wpdb->prefix}zestatix_element ( selector, browser_width, tracked ) VALUE ( %s, %s, %d )", $element['selector'], serialize( $element['browser_width'] ), $element['tracked'] )
				);
			} else {
				$wpdb->query(
					$wpdb->prepare( "UPDATE {$wpdb->prefix}zestatix_element SET browser_width = %s, tracked = %s WHERE selector = %s", serialize( $element['browser_width'] ), $element['tracked'], $element['selector'] )
				);
			}

			foreach( $element['track_on'] as $url => $arr ) {
				$wpdb->query(
					$wpdb->prepare( "INSERT INTO {$wpdb->prefix}zestatix_url_tracking ( id, url, subdir ) VALUE ( %d, %s, %d )", self::get_id_selector( $element['selector'] ), $url, $arr[ 'subdirectories' ] )
				);
			}

			$post_selectors[] = $element['selector'];
		}

		// удалить элементы которые были в базе но не было в POST
		foreach ( $data_selectors as $selector ) {
			if ( !in_array( $selector, $post_selectors ) ) {
				$wpdb->delete( $wpdb->prefix . 'zestatix_element', array( 'selector' => $selector ) );
			}
		}
	}

	public static function get_elements_by_url( $url ) {
		global $wpdb;

		$current_element_id = $wpdb->get_results( $wpdb->prepare(
			"SELECT DISTINCT
				{$wpdb->prefix}zestatix_url_tracking.id
			FROM
				{$wpdb->prefix}zestatix_url_tracking
			INNER JOIN
				{$wpdb->prefix}zestatix_element
			ON
				{$wpdb->prefix}zestatix_url_tracking.id = {$wpdb->prefix}zestatix_element.id
			WHERE
				{$wpdb->prefix}zestatix_element.tracked = %d
			AND
				( ( url = %s )
			OR
				( url != %s AND subdir = 1 AND %s REGEXP CONCAT( '^', url )
			OR
				( url = %s AND subdir = 1 ) ) )",
		 1, $url, $url, $url, home_url( '/' ) ) );

		$current_element = [];

		if ( $current_element_id ) {
			foreach( $current_element_id as $row ) {
				$current_element[] = self::get_element_by_id( $row->id );
			}
		}

		return $current_element;
	}

	public static function get_element_by_id( $id ) {
		global $wpdb;

		$query = $wpdb->get_results( $wpdb->prepare( "SELECT id, selector, browser_width FROM {$wpdb->prefix}zestatix_element WHERE id = %d", $id ) );

		$return_query = [];

		if ( $query ) {
			foreach ( $query as $row ) {
				$return_query = [
					'id'            => $row->id,
					'selector'      => $row->selector,
					'browser_width' => unserialize( $row->browser_width )
				];
			}
		}

		return $return_query;
	}

	public static function get_details_click() {
		if ( !current_user_can( 'edit_plugins' ) ) return;

		global $wpdb;

		$return_details = self::get_loaded();

		if ( !$return_details ) $return_details = [];

		$details_click = $wpdb->get_results(
			"SELECT
				{$wpdb->prefix}zestatix_event.device,
				{$wpdb->prefix}zestatix_event.width,
				{$wpdb->prefix}zestatix_event.event,
				{$wpdb->prefix}zestatix_element.selector,
				{$wpdb->prefix}zestatix_element.created,
				{$wpdb->prefix}zestatix_user.ip,
				{$wpdb->prefix}zestatix_user.location,
				{$wpdb->prefix}zestatix_user.login,
				{$wpdb->prefix}zestatix_url.url
			FROM
				{$wpdb->prefix}zestatix_event
			INNER JOIN
				{$wpdb->prefix}zestatix_element
			ON
				{$wpdb->prefix}zestatix_event.selector_id = {$wpdb->prefix}zestatix_element.id
			INNER JOIN
				{$wpdb->prefix}zestatix_user
			ON
				{$wpdb->prefix}zestatix_event.user_id = {$wpdb->prefix}zestatix_user.id
			INNER JOIN
				{$wpdb->prefix}zestatix_url
			ON
				{$wpdb->prefix}zestatix_event.url_id = {$wpdb->prefix}zestatix_url.id
			" );

		if ( $details_click ) {
			foreach( $details_click as $row ) {
				if ( empty( $login = $row->login ) ) $login = 'unknown';

				if ( empty( $location = $row->location ) ) $location = 'unknown';

				$return_details[$row->selector]['clicks'][] = ['date' => $row->event, 'ip' => $row->ip, 'url' => $row->url, 'location' => $location, 'login' => $login, 'device' => $row->device, 'width' => $row->width ];
			}
		}

		return $return_details;
	}

	public static function get_loaded() {
		if ( !current_user_can( 'edit_plugins' ) ) return;

		global $wpdb;

		$loaded = $wpdb->get_results(
			"SELECT
				{$wpdb->prefix}zestatix_element.selector,
				{$wpdb->prefix}zestatix_element.created,
				{$wpdb->prefix}zestatix_loaded.user,
				{$wpdb->prefix}zestatix_loaded.url
			FROM
				{$wpdb->prefix}zestatix_loaded
			INNER JOIN
				{$wpdb->prefix}zestatix_element
			ON
				{$wpdb->prefix}zestatix_loaded.elem = {$wpdb->prefix}zestatix_element.id
			" );

		if( $loaded ) {
			$return_loaded = [];

			foreach ( $loaded as $row ) {
				if( !isset( $return_loaded[$row->selector]['unique_user'] ) || !in_array( $row->user, $return_loaded[$row->selector]['unique_user'] ) ) {
						$return_loaded[$row->selector]['unique_user'][] = $row->user;
				}

				if( !isset( $return_loaded[$row->selector]['unique_url'] ) || !in_array( $row->url, $return_loaded[$row->selector]['unique_url'] ) ) {
						$return_loaded[$row->selector]['unique_url'][] = $row->url;
				}

				if( !isset( $return_loaded[$row->selector]['created'] ) ) {
						$return_loaded[$row->selector]['created'] = $row->created;
				}

				if( !isset( $return_loaded[$row->selector]['count_loaded'] ) ) {
					  $return_loaded[$row->selector]['count_loaded'] = 1;
				} else {
					  $return_loaded[$row->selector]['count_loaded']++;
				}
			}

			return $return_loaded;
		}
	}

	public static function get_id_selector( $selector ) {
		if ( !current_user_can( 'edit_plugins' ) ) return;

		global $wpdb;

		$id = $wpdb->get_var(
			$wpdb->prepare( "SELECT id FROM {$wpdb->prefix}zestatix_element WHERE selector = %s LIMIT 1", $selector ) );

		return $id;
	}

	public static function get_url_id( $url ) {
		global $wpdb;

		$find_url = self::find_url_id( $url );

		if ( empty( $find_url ) ) {
			$wpdb->insert(
				$wpdb->prefix . 'zestatix_url',
				array( 'url' => $url ),
				'%s'
			 );

			 $find_url = $wpdb->insert_id;
	 	}

		return $find_url;
	}

	public static function find_url_id( $url ) {
		global $wpdb;

		$query = $wpdb->get_var( $wpdb->prepare( "SELECT id FROM {$wpdb->prefix}zestatix_url WHERE url = %s LIMIT 1", $url ) );

		return $query;
	}

	public static function add_user( $location = '' ) {
		global $wpdb;

		$login = wp_get_current_user()->user_login;

		$wpdb->insert( $wpdb->prefix . 'zestatix_user',
			array( 'ip' => $_SERVER['REMOTE_ADDR'], 'location' => $location, 'login' => $login ),
			array( '%s', '%s', '%s' )
		);

		return $wpdb->insert_id;
	}

	public static function get_user_id() {
		global $wpdb;

		return $wpdb->get_var( $wpdb->prepare( "SELECT id FROM {$wpdb->prefix}zestatix_user WHERE login = %s OR ip = %s AND login = %s LIMIT 1", wp_get_current_user()->user_login, $_SERVER['REMOTE_ADDR'], '' ) );
	}

	public static function update_user_location( $location ) {
		global $wpdb;

		$wpdb->update( $wpdb->prefix . 'zestatix_user', [ 'location' => $location ], [ 'ip' => $_SERVER['REMOTE_ADDR'] ], [ '%s', '%s' ] );
	}

	public static function get_user_location_by_ip() {
		global $wpdb;

		$query = $wpdb->get_var( $wpdb->prepare( "SELECT location FROM {$wpdb->prefix}zestatix_user WHERE ip = %s LIMIT 1", $_SERVER['REMOTE_ADDR'] ) );

		return $query;
	}

	public static function del_data_selector( $selector ) {
		if ( !current_user_can( 'edit_plugins' ) ) return;

		global $wpdb;

		$id = self::get_id_selector( $selector );

		$wpdb->delete( "{$wpdb->prefix}zestatix_event", array( 'selector_id' => $id ) );

		$wpdb->delete( "{$wpdb->prefix}zestatix_loaded", array( 'elem' => $id ) );
	}
}
