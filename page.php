<?php
/**
 * The Template for displaying all single podcast posts.
 */

get_header(); ?>

    
		

    
        
      

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				

				<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
				

               

               
               
               </div>
               <div id="container">
               
              <div id="primary-content">
<div id="blog-entry">
                 <h1 class="entry-title"><?php the_title(); ?></h1>

   
                  <div class="entry-content">
						<?php the_content(); ?>
					</div>
                    
                    


					



<?php endwhile; // end of the loop. ?>
</div>
</div>
    <?php get_sidebar(); ?>


		</div><!-- #container -->

<?php get_footer(); ?>
