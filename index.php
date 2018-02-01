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
    
<main>
    <div class="home-name">
        <h1><span>O</span>livia<br><span>H</span>eshima<br><span>O</span>rr</h1>
    </div>
    <div class="home-links">
        <section class="welcome home-block">
            <h2>Welcome</h2>
            <p>Hi, I'm Olivia and I like to <a href="#">create things</a>. I'm particularly passionate about social justice and projects that impact people in my community. </p>
        </section>

        <section class="introduction home-block">
            <h2>Introduction</h2>
            <p>I am based in Portland, Maine. When I'm not on my grind at my 9:00 - 5:00 job, I continuously push to improve my <a href="#">programming and design</a> skills.</p>
        </section>

        <section class="contact home-block">
            <h2>Say Hi</h2>
            <p>Feel free to <a href="#">contact me</a> or take a look around my site to learn more.</p>
        </section>
    </div>
</main>
    
<?php echo get_footer(); ?>