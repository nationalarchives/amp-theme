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
    'height': '358'
  });
 </script>
               </div>
                 <h1 class="entry-title"><?php the_title(); ?></h1>
               </div>
               <div id="container">
               
              <div id="primary-content">
   <h2>Description</h2>

                <p class="date"><strong>Published date:</strong> <?php the_time('j F Y') ?></p>
                
                                       <?php if(function_exists('the_ratings')) { the_ratings(); } ?>

                
<div class="entry-content">
						<?php the_content(); ?>
					</div>
                    
				<p><span class="duration"><strong>Duration:</strong> <?php $values = get_post_custom_values("duration"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?></span> <span class="author"><strong>Author:</strong> <?php coauthors_posts_links(); ?></span></p>

<div id="category"><ul><li><h3>Categories</h3></li>
<?php
foreach((get_the_category()) as $category) {
if ($category->cat_ID != '767') {

echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Cortos de %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li>';

}
}
?></ul>
</div>
<div id="tags"><ul><li>
<h3>Tags</h3></li> <?php the_tags('<li>','</li><li>','</li>'); ?></ul>
</div>




      <!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4dc79624278ca1e9"></script>
<!-- AddThis Button END -->

<?php comments_template(); ?>
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
</div>

<div id="secondary-content">
<div class="widget-container">
<div class="innerWrapper">
<div class="download-wrapper"><a href="<?php $values = get_post_custom_values("audioFile"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?>" class="download">Download</a></div>
<p id="saveLink">Please save the file by right clicking and selecting "Save Target As" or "Save Link As" as option.</p>
</div>
</div>
<div class="widget-container">
<div class="innerWrapper">
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
		echo '<h2>Related Posts</h2><ul>';
			while ($my_query->have_posts()) {
		$my_query->the_post();
?>
 
		<li> <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_post_thumbnail( 'secondary-thumbnail' ); ?>
</a> <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></li>
 
<?php
	}
		echo '</ul>';
		}
	}
		$post = $backup;
		wp_reset_query();
?>
       </div></div>


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
