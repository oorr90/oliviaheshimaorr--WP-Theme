<?php
 echo get_header();
 ?>


 <!-- MAIN -->
    

<div class="home-name">
    <h1><span>O</span>livia<br><span>H</span>eshima<br><span>O</span>rr</h1>
</div>

<main>
    
    <section class="welcome">
        <h2>Welcome</h2>
        <p>Hi, I'm Olivia and I like to <a href="<?php echo site_url(); ?>/portfolio">create things</a>.</p>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/down_arrow.png" alt="White Github logo">
    </section>      
    
    <div class="home-links">
        <section class="home-block">
            <h2>Introduction</h2>
            <p>I am based in Portland, Maine. When I'm not on my grind at my 9:00 - 5:00 job, I continually push to improve my programming and design skills.</p>
        </section>

        <section class="home-block">
            <h2>Say Hi</h2>
            <p>Let's build something together. Feel free to <a href="<?php echo site_url(); ?>/contact">contact me</a> or take a look around to learn more about my work.</p>
        </section>
    </div>
    
    
    <div class="home-social">
        <h3>Connect</h3>
        <div class="home-social-inner">
    
    <?php

    $values = get_field('social_links');
    
        if ($values) {
                        
            foreach ($values as $value) {
                
                echo "<div class='home-social-icon'>";
                
                echo "<a href='" . $value['social_icon_link'] . "' target='blank'>";
                
                echo "<img src='" . $value['social_icon']['sizes']['medium'] . "' alt='" . $value['social_icon']['alt'] . "'>";
                
                echo "</a>";
                                
                echo "</div>";
                
            }
        }
    
    $email = get_field('email_link');
            
            if ($email) {
                
                foreach ($email as $emails) {
                                
                echo "<div class='home-social-icon'>";
                
                echo "<a href='" . $emails['email_link'] . "'>";
                
                echo "<img src='" . $emails['email_icon']['sizes']['medium'] . "' alt='" . $emails['email_icon']['alt'] . "'>";
                
                echo "</a>";
                                
                echo "</div>";
                }
                
            }


    ?>
    
        </div>
    </div>
    
</main>
    
<?php echo get_footer(); ?>