<?php
/**
 * The template for displaying 500 pages (Internal server error).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div id="container">
		<div id="content" role="main">

			<div id="post-0" class="post error500 not-found">
				<h1 class="entry-title"><?php _e( '500 Internal server error', 'twentyten' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'The web server encountered an unexpected error.', 'twentyten' ); ?></p>
					
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #container -->


<?php get_footer(); ?>