<?php

	/*
	Plugin Name: zeStatix
	Plugin URI: http://x9618502.beget.tech/
	Description: Click statistics for any selected element of the site page.
	Version: 1.1.0.1
	Text Domain: zestatix
 	Domain Path: /lang
	Author: Mikola Shadrin
	License: GPLv2 or later
	*/

	/*
	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
	*/
// уведомления
// видео по темам "описание"
// сайт
// оформление страниц в ВП
// выписать книги которые прочетал
	if ( !defined( 'ABSPATH' ) ) exit;

	define( 'DIR_ZESTATIX', plugin_dir_path( __FILE__ ) );

	define( 'INCLUDES_DIR_ZESTATIX', DIR_ZESTATIX . 'includes/' );

	define( 'DB_VERSION_ZESTATIX', 104 );

	require_once( INCLUDES_DIR_ZESTATIX . 'class_DB_zeStatix.php' );

	add_action( 'wp_ajax_nopriv_event_zestatix', 'event_zestatix' );

	add_action( 'wp_ajax_event_zestatix', 'event_zestatix' );

	function event_zestatix() {
		if ( isset( $_POST['zestatix'] ) ) {
			$event_zestatix = json_decode( sanitize_post( json_encode( wp_unslash( $_POST['zestatix'] ) ) ), true );

			DB_zeStatix::add_event( $event_zestatix );
		}

		die();
	}

	add_action( 'wp_footer', 'script_frontend_zestatix' );

	function script_frontend_zestatix() {
		if ( !is_customize_preview() && !is_admin() && +get_option( 'zestatix_toggle' ) && !get_option( 'zestatix_select' ) ) {
			require_once( INCLUDES_DIR_ZESTATIX . 'class_AddScriptFrontEnd_zeStatix.php' );

			new AddFrontEndScript_zeStatix();
		}
	}

	add_action( 'wp_ajax_nopriv_loaded_element_zestatix', 'loaded_element_zestatix' );

	add_action( 'wp_ajax_loaded_element_zestatix', 'loaded_element_zestatix' );

	function loaded_element_zestatix() {
		DB_zeStatix::loaded_element( ( int ) $_POST[ 'element_id' ], sanitize_post( $_POST[ 'url' ] ) );

		die();
	}

	add_action( 'wp_ajax_nopriv_add_user_zestatix', 'add_user_zestatix' );

	add_action( 'wp_ajax_add_user_zestatix', 'add_user_zestatix' );

	function add_user_zestatix() {
		DB_zeStatix::add_user( sanitize_post( $_POST[ 'location' ] ) );

		die();
	}

	add_action( 'wp_ajax_nopriv_update_user_location_zestatix', 'update_user_location_zestatix' );

	add_action( 'wp_ajax_update_user_location_zestatix', 'update_user_location_zestatix' );

	function update_user_location_zestatix() {
		DB_zeStatix::update_user_location( sanitize_post( $_POST[ 'location' ] ) );

		die();
	}

	add_action( 'wp_ajax_nopriv_update_user_login_zestatix', 'update_user_login_zestatix' );

	add_action( 'wp_ajax_update_user_login_zestatix', 'update_user_login_zestatix' );

	function update_user_login_zestatix() {
		DB_zeStatix::update_user_login( sanitize_post( $_POST[ 'login' ] ) );

		die();
	}

	add_action( 'wp_ajax_setting_zestatix', 'setting_zestatix' );

	function setting_zestatix() {
		if ( !current_user_can( 'edit_plugins' ) ) return;

		$post = ( isset( $_POST['arr_obj_setting_zestatix'] ) ) ? $_POST['arr_obj_setting_zestatix'] : [];

		$post = json_decode( sanitize_post( json_encode( wp_unslash( $post ) ) ), true );

		DB_zeStatix::update_elements( $post );

		update_option( 'zestatix', $post );

		if ( isset( $_POST['toggle_zestatix'] ) ) {
			update_option( 'zestatix_toggle', ( int ) $_POST['toggle_zestatix'] );
		}

		if ( isset( $_POST['select'] ) ) {
			update_option( 'zestatix_select', ( int ) $_POST['select'] );
		}
	}

	add_action( 'wp_ajax_select_ready_zestatix', 'select_ready_zestatix' );

	add_action( 'wp_loaded', 'check_select_zestatix' );

	function check_select_zestatix() {
		if ( current_user_can( 'edit_plugins' ) && get_option( 'zestatix_select' ) == '1' ) {
			add_filter('show_admin_bar', '__return_false');

			wp_enqueue_style( 'dashicons' );

			require_once( INCLUDES_DIR_ZESTATIX . 'class_Select_zeStatix.php' );

			new Select_zeStatix();
		}
	}

	function select_ready_zestatix() {
		if ( !current_user_can( 'edit_plugins' ) ) return;

		update_option( 'zestatix_panel_ready', 1 );
	}

	add_action( 'wp_ajax_set_data_select_panel_zestatix', 'set_data_select_panel_zestatix' );

	function set_data_select_panel_zestatix() {
		if ( !current_user_can( 'edit_plugins' ) ) return;

		update_option( 'zestatix_data_select', json_decode( sanitize_post( json_encode( wp_unslash( $_POST[ 'panel_data' ] ) ), 'db' ), true ) );
	}

	add_action( 'wp_ajax_get_data_select_panel_zestatix', 'get_data_select_panel_zestatix' );

	function get_data_select_panel_zestatix() {
		if ( !current_user_can( 'edit_plugins' ) ) return;

		echo get_option( 'zestatix_data_select' );

		die();
	}

	add_action( 'wp_ajax_del_data_select_panel_zestatix', 'del_data_select_panel_zestatix' );

	function del_data_select_panel_zestatix() {
		if ( !current_user_can( 'edit_plugins' ) ) return;

		delete_option( 'zestatix_data_select' );
	}

	add_action( 'wp_ajax_exit_select_zestatix', 'ajax_exit_select_zestatix' );

	function ajax_exit_select_zestatix() {
		exit_select_zestatix();

		die();
	}

	function exit_select_zestatix() {
		if ( !current_user_can( 'edit_plugins' ) ) return;

		delete_option( 'zestatix_select' );

		delete_option( 'zestatix_panel_ready' );

		delete_option( 'zestatix_data_select' );
	}

	add_action( 'wp_ajax_del_data_element_zestatix', 'del_data_element_zestatix' );

	function del_data_element_zestatix() {
		if ( !current_user_can( 'edit_plugins' ) ) return;

		$post = json_decode( sanitize_post( json_encode( wp_unslash( $_POST['selector_zestix'] ) ) ), true );

		if ( strlen( $post ) ) {
			DB_zeStatix::del_data_selector( $post );
		}

		wp_send_json_success();
	}

	add_filter( 'plugin_action_links', 'add_link_zestatix', 10, 2 );

	function add_link_zestatix( $links, $file ) {
		if ( strpos( $file, basename( __FILE__ ) ) == false ) return $links;

		$settings_link = '<a href="plugins.php?page=' . basename( dirname( __FILE__ ) ) . '">' . __( 'Settings', 'zestatix' ) . '</a>';

		array_unshift( $links, $settings_link );

		return $links;
	}

	add_action( 'admin_menu', 'add_pages_zestatix' );

	function add_pages_zestatix() {
		add_submenu_page( 'plugins.php', 'zeStatix', 'zeStatix', 'edit_plugins', 'zestatix', 'setting_page_zestatix' );
	}

	function setting_page_zestatix() {
		load_plugin_textdomain( 'zestatix', false, 'zestatix/lang/' );

		require_once( DIR_ZESTATIX . 'includes/setting_page.php' );

		$current_db_version_zestatix = + get_option( 'zestatix_db_version' );

		if ( DB_VERSION_ZESTATIX !== $current_db_version_zestatix ) {
			require_once( INCLUDES_DIR_ZESTATIX . 'db_upgrade.php' );
		}
	}

	register_activation_hook( __FILE__, 'install_plugin_zestatix' );

	register_deactivation_hook( __FILE__, 'uninstall_plugin_zestatix' );

	function install_plugin_zestatix() {
		require_once( INCLUDES_DIR_ZESTATIX . 'install_uninstall.php' );

		install_zestatix();
	}

	function uninstall_plugin_zestatix() {
		require_once( INCLUDES_DIR_ZESTATIX . 'install_uninstall.php' );

		uninstall_zestatix();
	}

	__( 'Click statistics for any selected element of the site page.', 'zestatix' );
