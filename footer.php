<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->


<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

<div id="footerInfo">
<div id="help"><h2><?php the_field ('title_right', 'options'); ?></h2><?php the_field ('content_right', 'options'); ?></div>
<div id="subscribe"><h2><?php the_field ('title_left', 'options'); ?></h2><?php the_field ('content_left', 'options'); ?></div>
</div>




</div><!-- #wrapper --><?php include("includes/footercms.php"); ?>
</div>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

</body>

</html>
