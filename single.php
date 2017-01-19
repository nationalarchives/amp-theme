<?php
/**
 * The Template for displaying all single podcast posts.
 */

get_header(); ?>

    
		

    
        
      

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
                <div id="banner">	
                    
               <div id="playerWrapper"> <div id="player">To view this film, you will require <a href="http://www.adobe.com/products/flashplayer/" class="external-link">Adobe Flash 9</a> or higher and must have <strong>Javascript enabled</strong>.</p></div>
             <script type='text/javascript'>
  jwplayer('player').setup({
    'flashplayer': '<?php bloginfo('template_directory'); ?>/player.swf',
    'file': '<?php $values = get_post_custom_values("audioFile"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?>',
	'title': '<?php the_title(); ?>',
	'image':  '<?php if (has_post_thumbnail( $post->ID ) ): ?><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'main-image' ); ?><?php echo $image[0]; ?><?php endif; ?>',
    'width': '500',
    'height': '358',
	<?php if ( in_category('audio') ) { ?>
	'skin': '<?php bloginfo('template_directory'); ?>/audio.zip'
	<?php } else { ?>
	'skin': '<?php bloginfo('template_directory'); ?>/video.zip'
	<?php } ?>




  });
 </script>
               </div>
               

               
               
                 <h1 class="entry-title"><?php the_title(); ?></h1>
               </div>
               <div id="container">
               
              <div id="primary-content">


<ul id="tabNavigation"><li><a href="#descriptionTab">Description</a></li>
<?php if(get_field('gallery')): ?><li><a href="#galleryTab">Gallery</a></li><?php endif; ?>
<?php if(get_field('transcription')): ?><li><a href="#transcriptionTab">Transcription</a></li><?php endif; ?>
<?php if(get_field('slideshare')): ?><li><a href="#slideshareTab">Slides</a></li><?php endif; ?>
<li><a href="#commentsTab">Comments</a></li></ul>


<!--Description-->
   <div id="tabs">
   <div id="descriptionTab">
   <h2>Description</h2>
   
     <p class="date"><strong>Published date:</strong> <?php the_time('j F Y') ?></p>
                  <div class="entry-content">
						<?php the_content(); ?>
					</div>
                    
                    
                    
                    <!-- content slider begins -->
                    <div id="slider">
                    
                         <?php if (in_category('audio')) { ?>
    <p><strong>Author:</strong> <span class="authorLink"><?php coauthors_posts_links(); ?></span> <strong>Duration:</strong> <span class="duration"><?php $values = get_post_custom_values("duration"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?></span> </p>

    <?php } elseif (in_category('video')) { ?>

    <p><strong>Author:</strong> <span class="authorLink"><?php coauthors_posts_links(); ?></span></p>
    
    <p><strong>Duration:</strong> <span class="duration"><?php $values = get_post_custom_values("duration"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?></span></p>
    
    <p><strong>Release date:</strong> <span class="duration"><?php $values = get_post_custom_values("releaseDate"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?></span></p>
    
    <?php $values = get_post_custom_values("producer"); if($values[0] == "") { echo ""; } else { echo "<p><strong>Producer:</strong><span class='duration'> $values[0]</span></p>"; } ?>
    
    <?php $values = get_post_custom_values("source"); if($values[0] == "") { echo ""; } else { echo "<p><strong>Source:</strong> <span class='duration'> $values[0]</span></p>"; } ?>
    
    <?php $values = get_post_custom_values("director"); if($values[0] == "") { echo ""; } else { echo "<p><strong>Director:</strong><span class='duration'> $values[0]</span></p>"; } ?>
    
    <?php $values = get_post_custom_values("sponsor"); if($values[0] == "") { echo ""; } else { echo "<p><strong>Sponsor:</strong> <span class='duration'> $values[0]</span></p>"; } ?>

    <?php } else { ?>

    <?php } ?>






                    <div id="ratings">
    <?php if(function_exists('the_ratings')) { the_ratings(); } ?> 
    </div> 

		
                

  
<div id="tags">
<ul><li><strong>Tags:</strong></li><?php the_tags('<li>','</li><li>','</li>'); ?></ul>
</div>
                
                

<div id="category"><ul><li><strong>Categories</strong></li>
<?php
foreach((get_the_category()) as $category) {
if($category->name=='Archives and archivists audio'||$category->name=='Archives and archivists video'||$category->name=='Family history audio'||$category->name=='Family history video'||$category->name=='featured'||$category->name=='Has related links'||$category->name=='International audio'||$category->name=='Law and order audio'||$category->name=='Law and order video'||$category->name=='Military history audio'||$category->name=='Military history video'||$category->name=='Political history audio'||$category->name=='Political history video'||$category->name=='Social history audio'||$category->name=='Social history video'||$category->name=='Uncategorized') continue;
$category_id = get_cat_ID( $category->cat_name );
$category_link = get_category_link( $category_id );
echo '<li><a href="'.$category_link.'">'.$category->cat_name.'</a></li>';
} ?></ul>
</div>



      <!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4dc79624278ca1e9"></script>
<!-- AddThis Button END -->
</div>
<div class="clearfix"></div>

</div>
<!-- content slider ends -->


<?php if(get_field('gallery')): ?>
<div id="galleryTab">
<h2>Document gallery</h2>
<ul class="images">
<?php while(the_repeater_field('gallery')): ?>
			<?php $thumb = wp_get_attachment_image_src(get_sub_field('imageGallery'), 'thumbnail'); ?>
        	<?php $image = wp_get_attachment_image_src(get_sub_field('imageGallery'), 'large'); ?>

			
<li>
<div class="thumbImage">
<img class="zoomIcon" alt="Zoom" src="<?php bloginfo('template_directory'); ?>/images/zoom.png"  />
          <a href="<?php echo $image[0]; ?>" title="<?php  the_sub_field('caption');?>" class="imageThumbsGroup" ><img src="<?php echo $thumb[0]; ?>" /></a>
	 </div>   <div class="imageContent">
<h3><?php  the_sub_field('caption');?></h3>
<p><?php  the_sub_field('reference');?></p>
</div>
<div class="clearfix"></div>
</li>
<?php endwhile; ?>
</ul>

	
<div class="clearfix"></div>

</div>
<?php endif; ?>


<div id="transcriptionTab">
<?php if (get_field('transcription') != "") { ?>
<h2>Transcription</h2><?php the_field ('transcription'); } ?>
<div class="clearfix"></div>
</div>

<div id="slideshareTab">
<?php if (get_field('slideshare') != "") { ?>
<h2>Slides</h2><?php the_field ('slideshare'); } ?>
<div class="clearfix"></div>
</div>


<div id="commentsTab">
<?php comments_template(); ?>
<div class="clearfix"></div>

</div>

<?php
/*
 * @param string $file File name or path to a file
 * @param int $precision Digits to display after decimal
 * @return string|bool Size (B, KiB, MiB, GiB, TiB, PiB, EiB, ZiB, YiB) or boolean
 */
 
$file = get_post_custom_values("audioFile");

function getFileSize($file, $precision = 2) {
        static $units = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB', 'ZiB', 'YiB');

        if (is_file($file)) {
                if (!realpath($file)) $file = $_SERVER['DOCUMENT_ROOT'] . $file;
                $fileSize = filesize($file);

                // hardcoded maximum number of units @ 9 for minor speed increase
                $power = max(floor(log($fileSize, 1024)), 8);
                return round($fileSize / pow(1024, $power), $precision) . $units[$power];
        }
        return false;
}

?>



</p>

					



<?php endwhile; // end of the loop. ?>
</div></div>

<div id="secondary-content">
<div class="widget-container">
<div class="innerWrapper">
<div class="download-wrapper"><a href="<?php $values = get_post_custom_values("audioFile"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?>" class="download">Download</a></div>
<p id="saveLink">Please save the file by right clicking and selecting 'Save Target As' or "Save Link As" as option.</p>
</div>
</div>

   <?php
	$backup = $post;
	$tags = wp_get_post_tags($post->ID);
		if ($tags) {
		$tag_ids = array();
	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
 
	$args=array(
		'tag__in' => $tag_ids,
		'post__not_in' => array($post->ID),
		'showposts'=>3, // Number of related posts that will be shown.
		'caller_get_posts'=>1
	);
 
	$my_query = new wp_query($args);
		if( $my_query->have_posts() ) {
		echo '<div class="widget-container">
<div class="innerWrapper"><h2>Related audio and video</h2><ul>';
			while ($my_query->have_posts()) {
		$my_query->the_post();
?>
 
		<li> <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_post_thumbnail( 'secondary-thumbnail' ); ?>
</a> <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></li>
 
<?php
	}
		echo '</div></div></ul>';
		}
	}
		$post = $backup;
		wp_reset_query();
?>
       


	<!-- Related links widget begins -->
<div class="innerWrapper">


<?php

if ( is_active_sidebar( 'links-footer-widget-area' )) {

dynamic_sidebar( 'links-footer-widget-area' );
}
?>


	<!-- Related links widget ends -->
</div>
    
    

                    
    </div>
    
   </div>
		</div><!-- #container -->

<?php get_footer(); ?>
