<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico" />
    
    <?php wp_head(); ?>
    
    
    
        
</head>
<body>
   
   <!-- HEADER -->
   
    <header>
        <div class="header-logo">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/oho-logo-transparent.png" alt="Red circular logo with initials"></a>
        </div>
        
        <nav role="navigation">
           <?php
                //Call the menu created in the admin panel
                    //use this for a simple site with only one menu
                    //It calls the first menu by default
                //wp_nav_menu(); 
            
                //Or add parameters to specify the menu
                // Parameters: developer.wordpress.org/reference/functions/wp_nav_menu/
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'primary_nav'
            ));
                
            
            ?>
        </nav>
    </header>
    
   
  
 












