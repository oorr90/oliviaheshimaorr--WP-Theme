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
    
    <h2>Websites</h2>
    <div class="archive-contain">
    
    <?php
        
        foreach($projects as $project) {
            
            if ($project -> additional_fields[project_type] == "Website") {
                ?>
                
                <div class='project-link'>
                    <a href="<?php echo $project -> permalink ?>">

                    <img src="<?php echo $project -> image_paths[large]; ?>" alt="">
                
                </a></div>
                
                <?php
            }
        }
        
    ?>
    
    </div>
    
    <h2>Graphic Design</h2>
    <div class="archive-contain">
    <?php
        
        foreach($projects as $project) {
            
            if ($project -> additional_fields[project_type] == "Print") {
                ?>
                
                <div class='project-link'>
                    <a href="<?php echo $project -> permalink ?>">

                    <img src="<?php echo $project -> image_paths[large]; ?>" alt="">
                
                </a></div>
                
                <?php
            }
        }
        
    ?>   
    </div>
    
    <h2>Other</h2>
    <div class="archive-contain">
    <?php
        
        foreach($projects as $project) {
            
            if ($project -> additional_fields[project_type] == "Video" || $project -> additional_fields[project_type] == "Other") {
                ?>
                
                <div class='project-link'>
                    <a href="<?php echo $project -> permalink ?>">

                    <img src="<?php echo $project -> image_paths[large]; ?>" alt="">
                
                </a></div>
                
                <?php
            }
        }
        
    ?>   
    </div>

    
</main>


<?php echo get_footer(); ?>