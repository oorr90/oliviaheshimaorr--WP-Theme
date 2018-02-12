<?php

    /**
     * This is the template for displaying portfolio items
     */

    $projects = get_project_list();

    echo "<!--";
    print_r($projects);
    echo "-->";


    echo get_header();

?>

<main class="main-page">
    
    <?php
    
       echo "<h1>" . str_replace( 'Archives: ','' , "My Portfolio" ) . "</h1>";
    
    ?>
    
    
    <!-- SORT PROJECTS HERE -->
    <div class="archive-contain">
    
    <?php
    
        foreach($projects as $project) {
            
            ?>
            
            
            
            <div class='project-link'>
            <a href="<?php echo $project -> permalink ?>">
             
            <h2 class="project-link-title"><?php echo $project -> post_title; ?></h2>
            
            <img src="<?php echo $project -> image_paths[large]; ?>" alt="">
            
            <?php
                
            ?>
            
            <?php
            echo "</a></div>";
            
        }
    
    ?>
    
    
    </div>
    
</main>


<?php echo get_footer(); ?>