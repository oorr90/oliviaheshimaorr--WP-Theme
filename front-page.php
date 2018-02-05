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
            <p>I am based in Portland, Maine. When I'm not on my grind at my 9:00 - 5:00 job, I continually push to improve my <a href="<?php echo site_url(); ?>/about">programming and design</a> skills.</p>
        </section>

        <section class="home-block">
            <h2>Say Hi</h2>
            <p>Feel free to <a href="<?php echo site_url(); ?>/contact">contact me</a> or take a look around to learn more.</p>
        </section>
    </div>
    
    
    <div class="home-social">
        <h3>Connect</h3>
        <div class="home-social-inner">
            <div class="home-social-icon">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/github_circle_logo_white.png" alt="White Github logo"></a>
            </div>
            <div class="home-social-icon">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/linkedin_circle_logo_white.png" alt="White LinkedIn logo"></a>
            </div>
            <div class="home-social-icon">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mail_circle_icon_white.png" alt="White send email icon"></a>
            </div>
        </div>
    </div>
</main>
    
<?php echo get_footer(); ?>