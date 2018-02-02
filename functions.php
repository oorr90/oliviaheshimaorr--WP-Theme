<?php

//Gotta create that custom menu
    // Nice tutorial: www.youtube.com/watch?v=Sz0z-Gyp3nA

//Activate the Menus for the WordPress Dashboard
    //using a WP hook

function olivia_theme_setup() {
    add_theme_support('menus');
    
    //Create the custom menu
    register_nav_menu('primary', 'Main Navigation'); //Add location and description
}

//Execute olivia_theme_setup after the setup
add_action('after_setup_theme', 'olivia_theme_setup');







?>