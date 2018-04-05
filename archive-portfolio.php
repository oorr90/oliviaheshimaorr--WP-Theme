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
    
       /* echo "<h1>" . str_replace( 'Archives: ','' , "My Work" ) . "</h1>"; */
    
    ?>
    
    
    <!-- SORT PROJECTS HERE -->
    <div class="archive-contain">
    <h1>Websites</h1>
    <div class="line"></div>
        <div class="wrap-projects">
        <?php

            foreach($projects as $project) {

                if ($project -> additional_fields[project_type] == "Website") {
                    ?>

                    <div class='single-project'>
                       <div class="single-project-image">
                            <a href="<?php echo $project -> additional_fields[website_link]; ?>" target="_blank"><img src="<?php echo $project -> image_paths[medium]; ?>" class="image"></a>

                            <a href="<?php echo $project -> additional_fields[website_link]; ?>" target="_blank"><div class="slider">
                                <div class="slider-text">Visit Website</div>
                            </div></a>
                        </div>
                        <h3><?php echo $project -> post_title; ?></h3>
                        
                        <a href="<?php echo $project -> permalink ?>" class="more-link">
                        <h4>Project details</h4>
                        </a>
                    </div>

                    <?php
                }
            }

        ?>
        </div>
    </div>

    
    <div class="archive-contain">
    <h1>Graphics</h1>
    <h3>View Projects</h3>
    <div class="line"></div>
    
    <?php
        
        foreach($projects as $project) {
            
            if ($project -> additional_fields[project_type] == "Print") {
                ?>
                
                <div class='project-link'>
                    <a href="<?php echo $project -> permalink ?>">

                    <h4><?php echo $project -> post_title; ?></h4>
                
                </a></div>
                
                <?php
            }
        }
        
    ?>   
    </div>
    
    <div class="archive-contain">
    <h1>Other Stuff</h1>
    <h3>I made a video</h3>
    <div class="line"></div>
    
    <?php
        
        foreach($projects as $project) {
            
            if ($project -> additional_fields[project_type] == "Video" || $project -> additional_fields[project_type] == "Other") {
                ?>
                
                <div class='project-link'>
                    <a href="<?php echo $project -> additional_fields[video_link]; ?>" target="_blank">

                    <h4><?php echo $project -> post_title; ?></h4>
                
                </a></div>
                
                <?php
            }
        }
        
    ?>   
    </div>

    
</main>


<?php echo get_footer(); ?>