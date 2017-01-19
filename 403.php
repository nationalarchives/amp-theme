<?php
/**
 * The template for displaying 403 pages (Forbidden).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div id="container">
		<div id="content" role="main">

			<div id="post-0" class="post error403 not-found">
				<h1 class="entry-title"><?php _e( '403 Forbidden', 'twentyten' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'You don&#39;t have permission to access this web page.', 'twentyten' ); ?></p>
					
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #container -->


<?php get_footer(); ?>