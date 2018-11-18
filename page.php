<?php get_header(); ?>


<?php
  while (have_posts()) {
  the_post();
?>



    <div class="container">
        
                <div class="page-title">
                    <h2><?php the_title() ?></h2>
                </div>
               
    </div>


                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
            


<?php the_content(); ?>

                        </div>
                        
                        <?php get_sidebar(); ?>

                    </div>
                    
                </div>
          

<?php } ?>


<?php get_footer(); ?>