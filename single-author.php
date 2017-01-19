<?php
/**
 * The Template for displaying all single podcast posts.
 */

get_header(); ?>

		
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				

				
                	<h1 class="entry-title"><?php the_title(); ?></h1>
                    




                
                
                <p><?php the_time('j F Y') ?></p>
				<p><strong>Duration:</strong> <?php $values = get_post_custom_values("duration"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?></p>
<p><strong>Author:</strong> <?php $values = get_post_custom_values("speaker"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?></p>

<p><strong>Date recorded:</strong> <?php $values = get_post_custom_values("dateRecorded"); if($values[0] == "") { echo "Not available"; } else { echo $values[0]; } ?></p>

<p><strong>Category:</strong> <?php the_category() ?></p>

<p><strong>Tags:</strong> <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>





</p>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>



<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>
