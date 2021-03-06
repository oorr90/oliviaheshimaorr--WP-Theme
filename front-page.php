<?php
 echo get_header();
?>


 <!-- MAIN -->
    

<div class="home-name">
    <h1><span>O</span>livia<br><span>H</span>eshima<br><span>O</span>rr</h1>
</div>

<main>

    <div class="home-intro">
        <h2>Hi, I'm Olivia and I like to <a href="<?php echo home_url(); ?>/portfolio">create things</a>.</h2>
        <h3>Intro</h3>
        <div class="line"></div>
        <p>I am based in Portland, Maine. When I'm not on my grind at my 9:00 - 5:00 job, I continually push to improve my programming and design skills.</p>
    </div>
     
    <div class="home-social">
        <h3>Connect</h3>
        <div class="home-social-inner">
    
    <?php

    $values = get_field('social_icon');
    
        if ($values) {                    
            foreach ($values as $value) {
                
                echo "<div class='home-social-icon'>";
                
                if ($value['link_type'] == 'Absolute') {
                    echo "<a href='" . $value['link_absolute'] . "'>";
                } else {
                    echo "<a href='" . $value['link_relative'] . "'>";
                }
                
                echo "<img src='" . $value['link_image']['sizes']['medium'] . "'" . "alt='" . $value['link_image']['alt'] . "'>";
                echo "</a></div>";
            }
            
        } else {
            echo "Social links coming soon!";
        }

    ?>
    
        </div>
    </div>
    
</main>
    
<?php echo get_footer(); ?>