<?php get_header(); ?>
		<div id="container">



<div id="primary-content"><h1 class="pagetitle"><?php printf( __( 'Search results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h1>
<?php echo category_description(); ?>

<ul id="archive">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
<li>
<div class="archiveThumb">

<?php if ( in_category('audio') ) { ?>

<a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><img class="audioIcon" alt="Audio content" src="<?php bloginfo('template_directory'); ?>/images/audioIcon.png"  /><?php the_post_thumbnail('primary-thumbnail'); ?></a>

<?php } else { ?>

<a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><img class="videoIcon" alt="Video content" src="<?php bloginfo('template_directory'); ?>/images/videoIcon.png"  /><?php the_post_thumbnail('primary-thumbnail'); ?></a>

                   <?php } ?>

</div>
<div class="archiveInfo">
<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
<?php the_excerpt(); ?>
</div>
</li>
<?php endwhile; ?>

<?php endif; ?>
</ul>
<div class="paginationWrapper"><?php tna_pagination($pages = '', $range = 4);?></div>
</div>
   <?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>