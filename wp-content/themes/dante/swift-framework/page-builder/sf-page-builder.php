<?php
	/*  for PRO users! - 
	* 
	*	Swift Page Builder - Main Class
	*	------------------------------------------------
	*	Swift Framework
	* 	Copyright Swift Ideas 2013 - http://www.swiftideas.net
	*
	*/

	if (!defined('ABSPATH')) die('-1');
	

	/*  for PRO users! -  DEFINITIONS
	================================================== */ 
	define('SPB_VERSION', '2.0');
	define('SPB_PATH', dirname(__FILE__));
	$spb_settings = Array(
	    'SPB_ROOT'      => SPB_PATH . '/',
	    'SPB_DIR'       => basename( SPB_PATH ) . '/',
	    'SPB_ASSETS'    => 'assets/',
	    'SPB_BUILDER'      => SPB_PATH . '/builder/',
	    'SPB_BUILDER_LIB'  => SPB_PATH . '/builder/lib/',
	    'SPB_BUILDER_SHORTCODES'  => SPB_PATH . '/builder/shortcodes/'
	);
	define( 'SPB_SHORTCODES', $spb_settings['SPB_BUILDER_SHORTCODES'] );
	
	/*  for PRO users! -  INCLUDE PAGE BUILDER INCLUDES
	================================================== */ 
	require_once( $spb_settings['SPB_BUILDER'] . 'spb-includes.php' );
	
	
	/*  for PRO users! -  INCLUDE BUILDER SETUP
	================================================== */ 
	require_once( $spb_settings['SPB_BUILDER'] . 'build.php' );
	
	
	/*  for PRO users! -  LAYOUT & SHORTCODE SETUP
	================================================== */ 
	require_once( $spb_settings['SPB_BUILDER_LIB'] . 'default-map.php' );
	
	
	/*  for PRO users! -  INITIALISE BUILDER
	================================================== */ 
	$wpSPB_setup = is_admin() ? new SFPageBuilderSetupAdmin() : new SFPageBuilderSetup();
	$wpSPB_setup->init($spb_settings);

?>