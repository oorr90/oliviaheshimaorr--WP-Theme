<?php

    /**
     * This is the template for displaying portfolio items
     */

    echo get_header();

?>

<main>
    
    <?php
    
       echo "<h1>" . str_replace( 'Archives: ','' , "My Portfolio" ) . "</h1>";
    
    ?>
    
    <?php
    
     if (have_posts() ):
            while (have_posts()) : the_post();
                echo "<h3>"; 
                the_title();
                echo "</h3>";
                echo "<div class='portfolio-thumb'>";
                the_post_thumbnail();
                echo "</div>";
            endwhile;
            else:
            echo '<p>Oh heavens, there\'s nothing here!</p>';
        endif;
    ?>

    
</main>


<?php echo get_footer(); ?>