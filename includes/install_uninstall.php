<?php
if ( !defined( 'ABSPATH' ) ) exit;

function install_zestatix() {
	if ( !current_user_can( 'activate_plugins' ) ) {
		return;
	}

	global $wpdb;

	$charset_collate = 'ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_general_ci;';

	$create_tables = [];

	$create_tables[] = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}zestatix_element (
		id INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		selector VARCHAR( 255 ) NOT NULL UNIQUE,
		browser_width VARCHAR( 100 ) NOT NULL,
		created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		tracked INT( 1 ) NOT NULL
	) {$charset_collate}";

	$create_tables[] = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}zestatix_event (
		selector_id INT( 10 ) NOT NULL,
		user_id INT( 10 ) NOT NULL,
		url_id SMALLINT NOT NULL,
		device VARCHAR( 6 ) NOT NULL,
		width VARCHAR( 15 ) NOT NULL,
		event TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		FOREIGN KEY ( selector_id ) REFERENCES {$wpdb->prefix}zestatix_element ( id ) ON DELETE CASCADE
	) {$charset_collate}";

	$create_tables[] = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}zestatix_url (
		id INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		url TEXT NOT NULL
	) {$charset_collate}";

	$create_tables[] = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}zestatix_loaded (
		elem INT( 10 ) NOT NULL,
		user INT( 10 ) NOT NULL,
		url SMALLINT NOT NULL,
		FOREIGN KEY ( elem ) REFERENCES {$wpdb->prefix}zestatix_element ( id ) ON DELETE CASCADE
	) {$charset_collate}";

	$create_tables[] = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}zestatix_user (
		id INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		ip VARCHAR( 40 ) NOT NULL,
		location VARCHAR( 50 ) NULL,
		login VARCHAR( 50 ) NULL,
		INDEX( ip ),
		INDEX( login )
	) {$charset_collate}";

	$create_tables[] = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}zestatix_url_tracking (
		id INT( 10 ) NOT NULL,
		url TEXT NOT NULL,
		subdir INT( 1 ) NOT NULL,
		FOREIGN KEY ( id ) REFERENCES {$wpdb->prefix}zestatix_element ( id ) ON DELETE CASCADE
	) {$charset_collate}";

	foreach ( $create_tables as $table ) {
		$wpdb->query( $table );
	}

	update_option( 'zestatix_toggle', 1 );

	update_option( 'zestatix_db_version', 104 );
}

function uninstall_zestatix() {
	if ( !current_user_can( 'delete_plugins' ) ) {
		return;
	}
	global $wpdb;

	$delete_tables = [ 'zestatix_user',
	  'zestatix_url',
	  'zestatix_event',
		'zestatix_loaded',
	 	'zestatix_url_tracking',
	 	'zestatix_element' ];

	foreach ( $delete_tables as $table ) {
		$query = 'DROP TABLE IF EXISTS ' . $wpdb->prefix . $table;
		$wpdb->query( $query );
	}

	$delete_options = [ 'zestatix_db_version',
		'zestatix_toggle',
		'zestatix' ];

 	foreach( $delete_options as $option ) {
 		delete_option( $option );
 	}

}
