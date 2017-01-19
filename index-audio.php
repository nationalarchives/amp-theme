<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
        
       
       <div id="feature-wrapper">
       <div id="featureOuter"> 
	<ul id="feature" class="pics">  <!-- feature -->
    
    
	
		  <?php $my_query = new WP_Query('posts_per_page=9'); ?>

<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>


<?php if ( in_category('audio') ) { ?>

		<li>
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img class="audioIcon" alt="Audio content" src="<?php bloginfo('template_directory'); ?>/images/audioIcon.png"  /><?php the_post_thumbnail('banner-image'); ?></a>
		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        </li>
             <?php } else { ?>
     
        		<li>
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img class="videoIcon" alt="Video content" src="<?php bloginfo('template_directory'); ?>/images/videoIcon.png"  /><?php the_post_thumbnail('banner-image'); ?></a>
		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        </li>
        
             <?php } ?>
        
        
		 <?php endwhile; ?>
	
	</ul>
    
  
  
 </div>
 <a href="#" title="previous" id="previous"><img src="<?php bloginfo('template_directory'); ?>/images/previous.png" alt="previous"  /></a>
  <a href="#" title="next" id="next"><img src="<?php bloginfo('template_directory'); ?>/images/next.png" alt="next"  /></a>
 
 </div> <!-- feature -->
        <div id="primary-content">
       
       <div id="categories">
       <h2>Browse categories</h2>
       <ul id="categoryNavigation"> 
       <li><h3><a href="#family-history">Family history</a></h3></li>
       <li><h3><a href="#military-history">Military history</a></h3></li>
       <li><h3><a href="#social-history">Social history</a></h3></li>
      </ul>
      
       <div id="categoryTabs">
       <ul id="family-history">
      
	  <?php $my_query = new WP_Query('category_name=family-history&posts_per_page=4'); ?>
<?php $i = 0 ; ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

<?php if ( in_category('audio') ) { ?>


<?php $i++;
if( $i % 2 == 0 ) $extra_class = 'even';
else $extra_class = 'odd'; ?>

<li  class="<?php echo $extra_class; ?>">
			   
			   <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><img class="audioIcon" alt="Audio content" src="<?php bloginfo('template_directory'); ?>/images/audioIcon.png"  /><?php the_post_thumbnail('primary-thumbnail'); ?></a>
               <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_time('j F Y') ?></p>

               
               </li>
                       <?php } else { ?>
    <?php $i++;
if( $i % 2 == 0 ) $extra_class = 'even';
else $extra_class = 'odd'; ?>

<li  class="<?php echo $extra_class; ?>">
			   
			   <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><img class="videoIcon" alt="Video content" src="<?php bloginfo('template_directory'); ?>/images/videoIcon.png"  /><?php the_post_thumbnail('primary-thumbnail'); ?></a>
               <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_time('j F Y') ?></p>

               
               </li>
                   <?php } ?>
               <?php endwhile; ?>
               <li class="catLink"><a href="<?php bloginfo( 'url' ); ?>/index.php/category/family-history/" rel="bookmark">View all family history media</a></li>

        </ul>
        
       
       <ul id="military-history">
      
	  <?php $my_query = new WP_Query('category_name=military-history&posts_per_page=4'); ?>

<?php $i = 0 ; ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

<?php if ( in_category('audio') ) { ?>


<?php $i++;
if( $i % 2 == 0 ) $extra_class = 'even';
else $extra_class = 'odd'; ?>

<li  class="<?php echo $extra_class; ?>">
			   
			   <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><img class="audioIcon" alt="Audio content" src="<?php bloginfo('template_directory'); ?>/images/audioIcon.png"  /><?php the_post_thumbnail('primary-thumbnail'); ?></a>
               <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_time('j F Y') ?></p>

               
               </li>
                       <?php } else { ?>
    <?php $i++;
if( $i % 2 == 0 ) $extra_class = 'even';
else $extra_class = 'odd'; ?>

<li  class="<?php echo $extra_class; ?>">
			   
			   <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><img class="videoIcon" alt="Video content" src="<?php bloginfo('template_directory'); ?>/images/videoIcon.png"  /><?php the_post_thumbnail('primary-thumbnail'); ?></a>
               <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_time('j F Y') ?></p>

               
               </li>
                   <?php } ?>
               <?php endwhile; ?>
               <li class="catLink"><a href="<?php bloginfo( 'url' ); ?>/index.php/category/military-history/" rel="bookmark">View all military history media</a></li>

        </ul>
        
         <ul id="social-history">
      
	  <?php $my_query = new WP_Query('category_name=social-history&posts_per_page=4'); ?>

<?php $i = 0 ; ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

<?php if ( in_category('audio') ) { ?>


<?php $i++;
if( $i % 2 == 0 ) $extra_class = 'even';
else $extra_class = 'odd'; ?>

<li  class="<?php echo $extra_class; ?>">
			   
			   <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><img class="audioIcon" alt="Audio content" src="<?php bloginfo('template_directory'); ?>/images/audioIcon.png"  /><?php the_post_thumbnail('primary-thumbnail'); ?></a>
               <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_time('j F Y') ?></p>

               
               </li>
                       <?php } else { ?>
    <?php $i++;
if( $i % 2 == 0 ) $extra_class = 'even';
else $extra_class = 'odd'; ?>

<li  class="<?php echo $extra_class; ?>">
			   
			   <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><img class="videoIcon" alt="Video content" src="<?php bloginfo('template_directory'); ?>/images/videoIcon.png"  /><?php the_post_thumbnail('primary-thumbnail'); ?></a>
               <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_time('j F Y') ?></p>

               
               </li>
                   <?php } ?>
               <?php endwhile; ?>
               <li class="catLink"><a href="<?php bloginfo( 'url' ); ?>/index.php/category/social-history/" rel="bookmark">View all social history media</a></li>

        </ul>
        
	</div>
    <div class="clear"></div>
    </div>
    
    
     

    
    </div>
    
    <?php get_sidebar(); ?>

   
    
    
    
    
                




	
         
                    
            
		
                    
               
             




			</div><!-- #content -->
	<!-- #container -->

<?php get_footer(); ?>
