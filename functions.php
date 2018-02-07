<?php

//INCLUDE CUSTOM CSS
function olivia_script_enqueue() {
    
    //The enqueue style hook has 5 params
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0.0', 'all');
    
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/assets/css/stylesheet.css', array(), '1.0.0', 'all');
    
    //Javascript in the footer
    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/javascript/app.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'olivia_script_enqueue');



//INCLUDE GOOGLE FONTS
function custom_add_google_fonts() {
    wp_register_style( 'google', 'https://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Condensed:400regular,700bold', array(), null, 'all' );
    wp_enqueue_style('google');
}
add_action('wp_enqueue_scripts', 'custom_add_google_fonts');



//DISPLAY TITLE TAG
add_theme_support( 'title-tag' );



//GOTTA CREATE THAT CUSTOM MENU
    // Nice tutorial: www.youtube.com/watch?v=Sz0z-Gyp3nA
function olivia_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Nav'); //Add location and description
}
//Execute olivia_theme_setup after the setup
add_action('after_setup_theme', 'olivia_theme_setup');












// ENABLE FEATURED IMAGES
add_theme_support( 'post-thumbnails' );













//REGISTER PORTFOLIO POST TYPE
function cptui_register_my_cpts_portfolio() {

	/**
	 * Post Type: Portfolio.
	 */

	$labels = array(
		"name" => __( "Portfolio", "min" ),
		"singular_name" => __( "Portfolio", "min" ),
		"menu_name" => __( "My Portfolio", "min" ),
		"all_items" => __( "All Portfolio Items", "min" ),
	);

	$args = array(
		"label" => __( "Portfolio", "min" ),
		"labels" => $labels,
		"description" => "Display portfolio items (graphic design and web)",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "portfolio", "with_front" => true ),
		"query_var" => true,
        "menu_position" => 5,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "portfolio", $args );
}

add_action( 'init', 'cptui_register_my_cpts_portfolio' );






?>