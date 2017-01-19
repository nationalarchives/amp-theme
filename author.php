<?php get_header(); ?>
		<div id="container">



<div id="primary-content">


<h1 class="page-title author"><?php printf( __( '%s', 'twentyten' ), "<span class='vcard'>".get_the_author()."</span>" ); ?> </h1>

<?php
// If a user has filled out their description, show a bio on their entries.
if ( get_the_author_meta( 'description' ) ) : ?>
					<div id="entry-author-info">
                    <h2>Profile</h2>
						<div id="author-avatar-image">
							<?php the_author_image(); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<?php the_author_meta( 'description' ); ?>
						</div><!-- #author-description	-->
                        <p class="clear"></p>
					</div><!-- #entry-author-info -->
<?php endif; ?>

<h2>Podcasts by <?php printf( __( '%s', 'twentyten' ), "<span class='vcard'>".get_the_author()."</span>" ); ?> </h2>

<ul id="archive">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
<li> <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_post_thumbnail('primary-thumbnail'); ?></a>
<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>


</li>
<?php endwhile; ?>

<?php endif; ?>
</ul>
</div>
   <?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>