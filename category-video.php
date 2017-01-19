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
    
    
	
		  <?php $my_query = new WP_Query('cat=857&posts_per_page=9'); ?>

<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>


    	<li>
		<div class="featureThumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img class="videoIcon" alt="Video content" src="<?php bloginfo('template_directory'); ?>/images/videoIcon.png"  /><?php the_post_thumbnail('banner-image'); ?></a></div>
		<div class="featureContent"><h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
        <div class="featuredBtn"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="featuredBtn">Watch now</a></div></div>
        </li>
        
        
		 <?php endwhile; ?>
	

	</ul>
        <div id="featureControls">
     <a href="#" title="previous" id="previous"><img src="<?php bloginfo('template_directory'); ?>/images/previous.png"  /></a>

     <a id="foo3_play" title="play" class="play" href="#"><span><img src="<?php bloginfo('template_directory'); ?>/images/play.png"  /></span></a>

    <a id="foo3_pause" title="pause" class="pause" href="#"><span><img src="<?php bloginfo('template_directory'); ?>/images/pause.png"  /></span></a>
  <a href="#" title="next" id="next"><img src="<?php bloginfo('template_directory'); ?>/images/next.png"  /></a>
</div>  
  
  
 </div>
 
 </div> <!-- feature -->
        <div id="primary-content">
       
       <div id="categories">
       <h2>Browse categories</h2>
       <ul id="categoryNavigation"> 
       <li><h3><a href="#family-history">Family history</a></h3></li>
       <li><h3><a href="#military-history">Military history</a></h3></li>
       <li><h3><a href="#social-history">Social history</a></h3></li>
       <li><h3><a href="#political-history">Political history</a></h3></li>
       <li><h3><a href="#law-and-order">Law and order</a></h3></li>
       <li><h3><a href="#archivists-and-archives">Archivists and archives</a></h3></li>
       <li><h3><a href="#international">International</a></h3></li>
      </ul>
      
       <div id="categoryTabs">
       <ul id="family-history">
      
	  <?php $my_query = new WP_Query('cat=-856,167&posts_per_page=4'); ?>
<?php $i = 0 ; ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>



<?php $i++;
if( $i % 2 == 0 ) $extra_class = 'even';
else $extra_class = 'odd'; ?>

<li  class="<?php echo $extra_class; ?>">
			   
			   <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><img class="videoIcon" alt="Video content" src="<?php bloginfo('template_directory'); ?>/images/videoIcon.png"  /><?php the_post_thumbnail('primary-thumbnail'); ?></a>
               <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_time('j F Y') ?></p>

               
               </li>
    
               <?php endwhile; ?>
               <li class="catLink"><a href="<?php bloginfo( 'url' ); ?>/index.php/category/family-history-video/" rel="bookmark">View all family history video</a></li>

        </ul>
        
       
       <ul id="military-history">
      
	  <?php $my_query = new WP_Query('cat=-856,165&posts_per_page=4'); ?>

<?php $i = 0 ; ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>



<?php $i++;
if( $i % 2 == 0 ) $extra_class = 'even';
else $extra_class = 'odd'; ?>

<li  class="<?php echo $extra_class; ?>">
			   
			   <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><img class="videoIcon" alt="Video content" src="<?php bloginfo('template_directory'); ?>/images/videoIcon.png"  /><?php the_post_thumbnail('primary-thumbnail'); ?></a>
               <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_time('j F Y') ?></p>

               
               </li>
      
               <?php endwhile; ?>
               <li class="catLink"><a href="<?php bloginfo( 'url' ); ?>/index.php/category/military-history-video/" rel="bookmark">View all military history video</a></li>

        </ul>
        
         <ul id="social-history">
      
	  <?php $my_query = new WP_Query('cat=-856,166&posts_per_page=4'); ?>

<?php $i = 0 ; ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>



<?php $i++;
if( $i % 2 == 0 ) $extra_class = 'even';
else $extra_class = 'odd'; ?>

<li  class="<?php echo $extra_class; ?>">
			   
			   <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><img class="videoIcon" alt="Video content" src="<?php bloginfo('template_directory'); ?>/images/videoIcon.png"  /><?php the_post_thumbnail('primary-thumbnail'); ?></a>
               <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_time('j F Y') ?></p>

               
               </li>
                    
               <?php endwhile; ?>
               <li class="catLink"><a href="<?php bloginfo( 'url' ); ?>/index.php/category/social-history-video/" rel="bookmark">View all social history video</a></li>

        </ul>
        <ul id="political-history">
      
	  <?php $my_query = new WP_Query('cat=-856,867&posts_per_page=4'); ?>

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
               <li class="catLink"><a href="<?php bloginfo( 'url' ); ?>/index.php/category/political-history-video/" rel="bookmark">View all political history video</a></li>

        </ul>
        <ul id="law-and-order">
      
	  <?php $my_query = new WP_Query('cat=-856,866&posts_per_page=4'); ?>

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
               <li class="catLink"><a href="<?php bloginfo( 'url' ); ?>/index.php/category/law-and-order-video/" rel="bookmark">View all law and order video</a></li>

        </ul>
        <ul id="archivists-and-archives">
      
	  <?php $my_query = new WP_Query('cat=-856,868&posts_per_page=4'); ?>

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
               <li class="catLink"><a href="<?php bloginfo( 'url' ); ?>/index.php/category/archives-and-archivists-video/" rel="bookmark">View all archivists and archives video</a></li>

        </ul>
        <ul id="international">
      
	  <?php $my_query = new WP_Query('cat=-856,869&posts_per_page=4'); ?>

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
               <li class="catLink"><a href="<?php bloginfo( 'url' ); ?>/index.php/category/international-video/" rel="bookmark">View all international video</a></li>

        </ul>
	</div>
    </div>
    
    
     

    
    </div>
    
    
		 <div id="secondary-content">
    <ul> 
    
    <li class="widget-container" >
    
    <div class="innerWrapper">
    <h2>Latest video</h2>
    <ul>
					  <?php query_posts( 'cat=857&posts_per_page=3'); ?>

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
     </ul>
     </div>

   
    
    
    
    
                




	
         
                    
            
		
                    
               
             



    <div class="clear"></div>

			</div><!-- #content -->
	<!-- #container -->

<?php get_footer(); ?>
