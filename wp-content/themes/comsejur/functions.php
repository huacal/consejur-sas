<?php
/* 
* Comsejur SAS functions and defintions
*
*
*@Packes
*@since 1.0
*
*/

define('THEMEPATH', get_stylesheet_directory_uri());
define('IMAGESPATH', THEMEPATH . '/images' );
define('FONTSPATH', THEMEPATH . '/fonts' );




// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 930;

if ( ! function_exists('csj_custom_theme_features') ) {

// Register Theme Features
function csj_custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'video', 'audio' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails');

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => '#bbb',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for Translation
	load_theme_textdomain( 'csj', get_template_directory() . '/languages' );

	//Add size image
	add_image_size('service_size_image', 750, 500, true);
	add_image_size('image_size_blog', 825, 533, true);
	add_image_size('image_size_single', 940, 607, true);
}


add_action( 'after_setup_theme', 'csj_custom_theme_features' );

}


/* 
* Register and Load css
*
*
*
*/

require_once('includes/scripts-styles.php');


/* 
* Register menu
*
*/

require_once('includes/menus.php');

/* 
* Register Widgets Place
*
*/
require_once('includes/sidebars.php');