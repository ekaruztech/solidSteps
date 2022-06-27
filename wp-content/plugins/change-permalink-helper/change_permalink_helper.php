<?php # -*- coding: utf-8 -*-
/**
 * Plugin Name: Change Permalink Helper
 * Plugin URI:  http://inspyde.com/
 * Text Domain: changepermalinkhelper
 * Domain Path: /languages
 * Description: It checks the Permalink and redirects to the new URL, if it doesn't exist. It sends the header message "moved permanently 301"
 * Version:     1.0.0
 * Author:      Frank Bültge
 * Author URI:  http://bueltge.de/
 * License:     GPLv3+
 */

//avoid direct calls to this file, because now WP core and framework has been used
if ( ! function_exists( 'add_action' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! class_exists( 'ChangePermalinkHelper' ) ) {
	class ChangePermalinkHelper {

		/**
		 * Constructor.
		 */
		public function __construct() {

			add_action( 'plugins_loaded', array( $this, 'onLoad' ) );
		}

		/**
		 * Run in the WP environment, only front end.
		 */
		public function onLoad() {

			if ( is_admin() ) {
				return;
			}
			add_action( 'template_redirect', array( $this, 'is404' ) );
		}

		/**
		 * Return header message.
		 *
		 * @return bool
		 */
		public function is404() {

			if ( ! is_404() ) {
				return FALSE;
			}

			global $wpdb;
			$slug = htmlspecialchars( basename( $_SERVER[ 'REQUEST_URI' ] ) );
			$id   = $wpdb->get_var(
				$wpdb->prepare( "
						SELECT ID 
						FROM $wpdb->posts
						WHERE post_name = '%s'
						AND post_status = 'publish'
					", $slug )
			);

			if ( $id ) {
				$url = get_permalink( $id );
				header( 'HTTP/1.1 301 Moved Permanently' );
				header( 'Location: ' . $url );

				return FALSE;
			}

			return TRUE;
		}

	} // end class

	$ChangePermalinkHelper = new ChangePermalinkHelper();
}
