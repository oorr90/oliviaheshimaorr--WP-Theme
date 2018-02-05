<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage min
 */
 echo get_header();
 ?>


 <!-- MAIN -->
    
<main class="main-page">

<!-- I think there is probably a better way of doing this... -->
 
    <?php 
	   if ( is_page('contact')) { 
		  echo '<div class="contact-page-wrap">'; 
	   } 

        if (have_posts() ):
            while (have_posts()) : the_post();
                the_content();
            endwhile;
            else:
            echo '<p>Oh heavens, there\'s nothing here!</p>';
        endif;
 
	   if ( is_page('contact')) { 
		  echo '</div>'; 
	   } 
    ?>

    
</main>
    
<?php echo get_footer(); ?>