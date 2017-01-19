<?php
/**
 * The Template for displaying all single podcast posts.
 */

get_header(); ?>

		<div id="container">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
                	<h1 class="entry-title"><?php the_title(); ?></h1>
                    



     <script type="text/javascript">
    <!--//
      var flashvars =
      {
        file: 	'<?php $values = get_post_custom_values("audioFile"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?>',
		title:	'<?php the_title(); ?>'
      };

      var params =
      {
        allowfullscreen:      'true',
        allowscriptaccess:    'always'
      };

      var attributes =
      {
        id:                   'player',
        name:                 'player'
      };

      swfobject.embedSWF("http://dev.nationalarchives.web.local/video/player/player.swf", "player", "700", "24", "9.0.124", false, flashvars, params, attributes);
    //-->
    </script>
    
    <?php $values = get_post_custom_values("image"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?>
    
               <div id="playerWrapper"> <div id="player">To view this film, you will require <a href="http://www.adobe.com/products/flashplayer/" class="external-link">Adobe Flash 9</a> or higher and must have <strong>Javascript enabled</strong>.</p></div></div>
                
                
                <p><?php the_time('j F Y') ?></p>
				<p><strong>Duration:</strong> <?php $values = get_post_custom_values("duration"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?></p>
<p><strong>Author:</strong> <?php $values = get_post_custom_values("speaker"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?></p>

<p><strong>Date recorded:</strong> <?php $values = get_post_custom_values("dateRecorded"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?></p>

<p><strong>Category:</strong> <?php the_category() ?></p>

<p><strong>Tags:</strong> <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>

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

					<div class="entry-content">
						<?php the_content(); ?>
					</div>



<?php endwhile; // end of the loop. ?>

		</div><!-- #container -->

<?php get_footer(); ?>
