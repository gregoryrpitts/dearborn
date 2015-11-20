<?php
/*
Template Name: Blog
*/

get_header(); ?>

    <!-- Blog Posts
    ================================================== -->
    <div class="blog">
        <div class="container">
            <div class="row">

					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$wp_query = new WP_Query( array('post_type' => 'post', 'showposts' => '8', 'paged' => $paged) );

					if( $wp_query->have_posts() ):
					 
						while ($wp_query->have_posts()) : 
						
							$wp_query->the_post();
							get_template_part( 'content' );

						endwhile;

						rokophoto_pagination();

					else:
					
						get_template_part( 'content', 'none' );
					
					endif;

					wp_reset_postdata();
					?>

            </div>
        </div>
    </div>

<?php get_footer(); ?>