<?php get_header(); ?>

<h1 class="pagetitle"><?php the_title(); ?></h1>

<ul id="archive">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<li><h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
<?php the_excerpt('Read more &raquo;'); ?>

</li>
<?php endwhile; ?>
<li> No posts showing</li>
<?php endif; ?>
</ul>

<?php get_footer(); ?>