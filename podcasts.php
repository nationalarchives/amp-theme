<?php
/*
Template Name: Podcasts
*/
?>

<?php get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
				</div><!-- #nav-above -->

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>

					<div class="entry-meta">
						<?php twentyten_posted_on(); ?>
					</div><!-- .entry-meta -->

					<div class="entry-content">
                    
                    
                    <script type="text/javascript">
    <!--//
      var flashvars =
      {
        file:                 	'<?php echo get_post_meta($post->ID, audioFile, true);?>',
		title:					'<?php the_title(); ?>',
		author:   				'<?php echo get_post_meta($post->ID, speaker, true); ?>',
		description:			'The Western powers airlift of supplies to Berlin during the Soviet Blockade of the city',
		stretching:				'exactfit',
		
		
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

      swfobject.embedSWF("http://dev.nationalarchives.web.local/video/player/player.swf", "player", "640", "24", "9.0.124", false, flashvars, params, attributes);
    //-->
    </script>
                    
                    
                <div id="player">To view this film, you will require <a href="http://www.adobe.com/products/flashplayer/" class="external-link">Adobe Flash 9</a> or higher and must have <strong>Javascript enabled</strong>.</p></div>     
                    
                    
                    
                    




                    
                    <p>Speaker: <?php echo get_post_meta($post->ID, speaker, true); ?></p>
                    <p>Category: <?php echo get_post_meta($post->ID, category, true); ?></p>
                    




						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<div id="author-link">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
									<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten' ), get_the_author() ); ?>
								</a>
							</div><!-- #author-link	-->
						</div><!-- #author-description -->
					</div><!-- #entry-author-info -->
<?php endif; ?>

					<div class="entry-utility">
						<?php twentyten_posted_in(); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-utility -->
				</div><!-- #post-## -->

				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
				</div><!-- #nav-below -->

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
