<?php
/*
 *  Author: Heisenberg
 *  URL: maqal-store.com | @maqal-store.com
 *  Custom functions, support, custom post types and more.
 */

// load the frame wor
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );


/*------------------------------------*\
	KateegatPlus External Modules/Files
\*------------------------------------*/
function kateegatplus_styles() {
    wp_enqueue_style( 'kateegatplus-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), true );

    wp_enqueue_style( 'kateegatplus-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    
    wp_enqueue_style( 'kateegatplus-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
            
    wp_enqueue_style( 'kateegatplus-main-style', get_template_directory_uri() . '/css/main.css', array(), true );
    
}

add_action( 'wp_enqueue_scripts', 'kateegatplus_styles' );

// Winterfell Scripts

function kateegatplus_scripts() {
wp_register_script('kateegatplus-jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', '','', true);
wp_enqueue_script('kateegatplus-jquery');
    
wp_register_script('kateegatplus-bootsrtap-js', get_template_directory_uri() . '/js/bootstrap.min.js', '','', true);
wp_enqueue_script('kateegatplus-bootsrtap-js');
    
wp_register_script('kateegatplus-fancybox-js', get_template_directory_uri() . '/js/jquery.fancybox.min.js', '','', true);
wp_enqueue_script('kateegatplus-fancybox-js');
    
wp_register_script('kateegatplus-main-js', get_template_directory_uri() . '/js/main.js', '','', true);
wp_enqueue_script('kateegatplus-main-js');
}
 
add_action( 'wp_enqueue_scripts', 'kateegatplus_scripts' );

/*
// Google Fonts
function custom_add_google_fonts() {
    wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display+SC');

    wp_enqueue_style( 'custom-google-fonts2', 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300');
    
    wp_enqueue_style( 'custom-google-fonts3', 'https://fonts.googleapis.com/css?family=Teko');
    
    wp_enqueue_style( 'custom-google-fonts4', 'https://fonts.googleapis.com/css?family=Cairo');
 }
 add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );

*/

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

/*------------------------------------*\
	Functions
\*------------------------------------*/



/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/


?>