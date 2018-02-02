<?php

//Include custom CSS file in the header
function olivia_script_enqueue() {
    
    //The enqueue style hook has 5 params
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0.0', 'all');
    
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/assets/css/stylesheet.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'olivia_script_enqueue');



//Include Google Fonts
function custom_add_google_fonts() {
    wp_register_style( 'google', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400regular,700bold', array(), null, 'all' );
    wp_enqueue_style('google');
}
add_action('wp_enqueue_scripts', 'custom_add_google_fonts');



//Gotta create that custom menu
    // Nice tutorial: www.youtube.com/watch?v=Sz0z-Gyp3nA
function olivia_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('primary', 'Main Navigation'); //Add location and description
}
//Execute olivia_theme_setup after the setup
add_action('after_setup_theme', 'olivia_theme_setup');







?>