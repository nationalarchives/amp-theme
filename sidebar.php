<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		 <div id="secondary-content">
    <ul> 
    
    <li class="widget-container" >
    
    <div class="innerWrapper">
    <h2>Latest media</h2>
    <ul>
					  <?php query_posts( 'posts_per_page=3'); ?>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
 
      <?php if ( in_category('audio') ) { ?>

               <li>
		   <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><img class="audioIcon" src="<?php bloginfo('template_directory'); ?>/images/audioIcon.png" width="20px" height="20px"  /><?php the_post_thumbnail( 'secondary-thumbnail' ); ?>
</a>

              <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a>
                <p><?php the_time('j F Y') ?></p>

               
               </li>
               
                <?php } else { ?>
               
                       <li>
		   <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><img class="audioIcon" src="<?php bloginfo('template_directory'); ?>/images/videoIcon.png" width="20px" height="20px"  /><?php the_post_thumbnail( 'secondary-thumbnail' ); ?>
</a>

               <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_time('j F Y') ?></p>

               
               </li>
                                  <?php } ?>

               
               <?php endwhile; ?>
               
               
               
     <?php endif; ?>
     
     </ul>
     <div class="clear"></div>
     </div>
     </li>

                
  
       <?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
			<li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</li>

			<li id="archives" class="widget-container">
				<h2 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h2>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li id="meta" class="widget-container">
				<h2 class="widget-title"><?php _e( 'Meta', 'twentyten' ); ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

		<?php endif; // end primary widget area ?>
              </ul>
      
    </div>
			

<!-- #primary .widget-area -->

