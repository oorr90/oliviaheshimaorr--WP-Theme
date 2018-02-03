<?php

//Include custom CSS file in the header
function olivia_script_enqueue() {
    
    //The enqueue style hook has 5 params
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0.0', 'all');
    
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/assets/css/stylesheet.css', array(), '1.0.0', 'all');
    
    //Javascript in the footer
    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/javascript/app.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'olivia_script_enqueue');



//Include Google Fonts
function custom_add_google_fonts() {
    wp_register_style( 'google', 'https://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Condensed:400regular,700bold', array(), null, 'all' );
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



//Create Portfolio Page custom post type
function my_portfolio() {
    $args = array(
      'label' => 'My Portfolio',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'portfolio'),
        'query_var' => true,
        'menu_icon' => 'dashicons-admin-post',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );
    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'my_portfolio' );





?>