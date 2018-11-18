<?php /* Template Name: Blog Template */ ?>

<?php get_header(); ?>







<div class="blog-area pt-50 pb-100">

<div class="container">

    
  
	
	<div class="row">
		<div class="col-md-8">

      <h3><?php the_title() ?></h3>

      
			<!-- <h1 class="ultimas">últimas</h1> -->
                <?php
                    $wp_query = new WP_Query();
                    query_posts( array( 'post_type' => 'post', 'showposts' => 5, 'paged'=>$paged ));
                    if(have_posts()):
                    while ($wp_query -> have_posts()) : $wp_query -> the_post();
                ?>

                <div class="post-preview">
                  

                  <div class="row">
                    
                    <div class="col-md-4">
                      <?php the_post_thumbnail('singlelist'); ?>
                    </div>

                    <div class="col-md-8">
                      <h3 class="post-title">
                        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                    </h3>

                    <p class="post-meta">Por <?php the_author_posts_link(); ?> em <?php the_time('j \d\e F \d\e Y') ?></p>
                                
                    <?php the_excerpt(); ?>
                    </div>
                  
                  </div>
                        
                    
                            
                    
                </div>
                <?php endwhile; endif; ?>
                
                <!-- <ul class="pager">
                    <li class="previous"><?php next_posts_link('<span>Mais publicações</span>') ?></li>
                    <li class="next"><?php previous_posts_link('<span>Anteriores</span>') ?></li>
                </ul> -->

<div class="text-center">

                <?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );
?>

</div>

		</div>

		
			<?php get_sidebar();?>
		
	</div>
</div>

</div>



<?php get_footer(); ?>