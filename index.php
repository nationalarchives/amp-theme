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
    
    
	
		  <?php $my_query = new WP_Query('category_name=featured&posts_per_page=9'); ?>

<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>


<?php if ( in_category('audio') ) { ?>

		<li>
		<div class="featureThumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img class="audioIcon" alt="Audio content" src="<?php bloginfo('template_directory'); ?>/images/audioIcon.png"  /><?php the_post_thumbnail('banner-image'); ?></a></div>
		<div class="featureContent"><h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
        <div class="featuredBtn"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">Listen now</a></div></div>
        </li>
             <?php } else { ?>
     
       	<li>
		<div class="featureThumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img class="videoIcon" alt="Video content" src="<?php bloginfo('template_directory'); ?>/images/videoIcon.png"  /><?php the_post_thumbnail('banner-image'); ?></a></div>
		<div class="featureContent"><h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
        <div class="featuredBtn"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="featuredBtn">Watch now</a></div></div>
        </li>
        
             <?php } ?>
        
        
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
             <ul id="political-history">
      
	  <?php $my_query = new WP_Query('category_name=political-history&posts_per_page=4'); ?>

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
               <li class="catLink"><a href="<?php bloginfo( 'url' ); ?>/index.php/category/political-history/" rel="bookmark">View all political history media</a></li>

        </ul>
        <ul id="law-and-order">
      
	  <?php $my_query = new WP_Query('category_name=law-and-order&posts_per_page=4'); ?>

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
               <li class="catLink"><a href="<?php bloginfo( 'url' ); ?>/index.php/category/law-and-order/" rel="bookmark">View all law and order media</a></li>

        </ul>
        <ul id="archivists-and-archives">
      
	  <?php $my_query = new WP_Query('category_name=archives-and-archivists&posts_per_page=4'); ?>

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
               <li class="catLink"><a href="<?php bloginfo( 'url' ); ?>/index.php/category/archives-and-archivists/" rel="bookmark">View all archivists and archives media</a></li>

        </ul>
        <ul id="international">
      
	  <?php $my_query = new WP_Query('category_name=international&posts_per_page=4'); ?>

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
               <li class="catLink"><a href="<?php bloginfo( 'url' ); ?>/index.php/category/international/" rel="bookmark">View all international media</a></li>

        </ul>
	</div>
    <div id="miniSeries">
           <h2>Mini series</h2>
    <ul>
    <li id="transparency"><a href="/index.php/tag/writer-of-the-month/"><img src="<?php bloginfo('template_directory'); ?>/images/miniSeries/writer-month.jpg" /></a><p>A series of free talks, in which high profile authors share their experiences of using original records in their writing.</p><h3><a href="/index.php/tag/writer-of-the-month/">Writer of the month</a></h3></li>

    <li id="webinar"><a href="/index.php/tag/webinars/"><img src="<?php bloginfo('template_directory'); ?>/images/miniSeries/webinars-cab-134-4572-1-1981.jpg" /></a><p>Seminars presented by our record specialists, focusing on different series of records and the research skills needed to make the most of them.</p><h3><a href="/index.php/tag/webinars/">Webinars</a></h3></li>

    <!-- <li id="africa"><a href="http://www.nationalarchives.gov.uk/australasia/"><img src="<?php bloginfo('template_directory'); ?>/images/miniSeries/australasia.jpg" /></a><p>Podcasts on the thousands of images taken from the Foreign and Commonwealth Office, held at The National Archives.</p><h3><a href="http://www.nationalarchives.gov.uk/australasia/">Australasia through a lens</a></h3></li> -->

    <li id="voices"><a href="<?php bloginfo( 'url' ); ?>/index.php/tag/arts-and-inspiration-day/"><img src="<?php bloginfo('template_directory'); ?>/images/miniSeries/arts-and-inspiration-day.jpg" /></a><p>Arts and Inspiration Day is a free event for students considering PhD study which introduces the research potential of our collection.</p><h3><a href="<?php bloginfo( 'url' ); ?>/index.php/tag/arts-and-inspiration-day/">Arts and Inspiration Day</a></h3></li>

    <li id="big-ideas"><a href="<?php bloginfo( 'url' ); ?>/index.php/tag/big-idea/"><img src="<?php bloginfo('template_directory'); ?>/images/miniSeries/big-ideas-inf-3-1065.jpg" /></a><p>Our series of monthly talks on the big ideas coming out of The National Archives' research programme.</p><h3><a href="<?php bloginfo( 'url' ); ?>/index.php/tag/big-idea/">Big Ideas</a></h3></li> 

    <!-- <li id="war"><a href="<?php bloginfo( 'url' ); ?>/index.php/category/war-on-film-2/"><img src="<?php bloginfo('template_directory'); ?>/images/miniSeries/war.jpg" /></a><p>Military records specialist William Spencer explores the true stories behind popular war films, using original records to depict actual events.</p><h3><a href="<?php bloginfo( 'url' ); ?>/index.php/category/war-on-film-2/">War on film</a></h3></li> -->
    
    </div>
    <div class="clear"></div>
    </div>
    
    
     

    
    </div>
    
    <?php get_sidebar(); ?>


			</div><!-- #content -->
	<!-- #container -->

<?php get_footer(); ?>
