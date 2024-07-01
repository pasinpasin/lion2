<div class="container-fluid">
<?php
//Template Name: Galeria
get_header('aboutus');
?>


      
   
                  
    <div class="container-fluid" id="galeria" style="margin-top: 35px; margin-bottom: 35px;">
        <div class="row d-flex justify-content-center">
            <div class="col">
            <?php 
                //if( function_exists('photo_gallery') ) {echo  photo_gallery(3); } 
                //echo do_shortcode('[modula id="103"]');
				echo do_shortcode('[modula id="137"]');
                ?>

            </div>
        </div>
    </div>
	 </div>
  


<?php get_footer(); ?>