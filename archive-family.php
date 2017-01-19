<?php
/*
Template Name: Archives with Content
*/
?>


<?php get_header(); ?>
		<div id="container">



<div id="primary-content"><h1 class="pagetitle"><?php single_cat_title(); ?></h1>

<div id="catDescription"><?php echo category_description(); ?></div>
<ul id="archive">


<?php $my_query = new WP_Query('cat=-857,167'); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
<li>
<div class="archiveThumb">

<a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><img class="audioIcon" alt="Audio content" src="<?php bloginfo('template_directory'); ?>/images/audioIcon.png"  /><?php the_post_thumbnail('primary-thumbnail'); ?></a>

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