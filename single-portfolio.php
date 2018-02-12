<?php




 echo get_header();




 ?>


 <!-- MAIN -->
    
<main class="main-page">


    <!-- BEGIN INNER WRAPPER -->
    <div <?php 
            if ( is_page('contact')) { 
		      echo 'class="contact-page-wrap"'; 
	       } ?> >
 
     <?php
        
        the_title();
        

        ?>
     
    
    
    <!-- END INNER WRAPPER -->
    </div>

    
</main>
    
<?php echo get_footer(); ?>