<?php
/**
 * The Template for displaying all single podcast posts.
 */

get_header(); ?>

    
		<div id="container">
        
      

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
                <div id="banner">	
                    
              
               <h1 class="entry-title"><?php the_title(); ?></h1>
            
               
               </div>
              <div id="primary-content">
         
                
                <p class="date"><strong>Published date:</strong> <?php the_time('j F Y') ?></p>
                
                <div class="entry-content">
						<?php the_content(); ?>
					</div>
                    
				<p><strong>Duration:</strong> <?php $values = get_post_custom_values("duration"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?> <strong>Author:</strong> <?php $values = get_post_custom_values("author"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?></p>
       <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
<p><strong>Date recorded:</strong> <?php $values = get_post_custom_values("dateRecorded"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?></p>

<div id="category"><h3>Categories</h3>
<?php
foreach((get_the_category()) as $category) {
if ($category->cat_ID != '767') {

echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Cortos de %s" ), $category->name ) . '" ' . '>' . $category->name.'</a>&nbsp; &nbsp;  ';

}
}
?>
</div>
<div id="tags">
<h3>Tags</h3> <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
</div>

<a href="<?php $values = get_post_custom_values("audioFile"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?>" class="download">Download</a>

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
 
		<li> <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_post_thumbnail( 'custom2' ); ?>
</a> <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></li>
 
<?php
	}
		echo '</ul>';
		}
	}
		$post = $backup;
		wp_reset_query();
?>
       
                    
    </div>
    
   </div>
		</div><!-- #container -->

<?php get_footer(); ?>
