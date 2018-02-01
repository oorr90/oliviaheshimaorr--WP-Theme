<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico" />-->
    
    <!-- LOAD CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>assets/css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans|Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    
    <!-- PAGE META TITLE / DESCRIPTION -->
    <title><?php echo get_bloginfo('name'); ?> | <?php echo get_the_title(); ?></title>
		<meta name="description" content="Welcome to Olivia's website..." />
    
    <?php wp_head(); ?>
        
</head>
<body>
   
   <!-- HEADER -->
   
    <header>
        <div class="header-logo">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>assets/img/oho-logo-transparent.png" alt="red circular logo with initials">
        </div>
        <nav>
            <ul>
                <li><a href="index.php" class="selected">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">My Work</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>