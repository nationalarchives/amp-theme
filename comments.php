<?php


if ( post_password_required() ) : ?>
<p><?php _e('Enter your password to view comments.'); ?></p>
<?php return; endif; ?>

<div id="comments">
<!--<h2 ><?php comments_number(__('No Comments'), __('1 Comment'), __('% Comments')); ?></h2>-->

<?php if ( have_comments() ) : ?>
<ol class="commentlist">

<?php foreach ($comments as $comment) : ?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
	
	
	<div class="dateAvatar">
	<div class="avatarImg"><?php echo get_avatar( $comment, 70 ); ?></div>
    <div class="commentDate"><?php comment_date() ?></div>
	<div class="commentTime"><?php comment_time() ?></div>
    </div>
    
    
   
	<div class="commentText"><h3><?php comment_author_link() ?></h3> <?php comment_text() ?> 

</div> <?php comment_reply_link(); ?>
	<p> <?php edit_comment_link(("Edit This")); ?></p>
	</li>

<?php endforeach; ?>

</ol>

<?php else : // If there are no comments yet ?>

<?php endif; ?>

<!--<p><?php post_comments_feed_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for comments on this post.')); ?>
<?php if ( pings_open() ) : ?>
	<a href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack <abbr title="Universal Resource Locator">URL</abbr>'); ?></a>
<?php endif; ?>
</p>
-->



<div id="commentsForm">
<?php if ( comments_open() ) : ?>
<h2 id="postcomment"><?php _e('Leave a comment'); ?></h2>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url( get_permalink() ) );?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p><?php printf(__('Logged in as %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account') ?>"><?php _e('Log out &raquo;'); ?></a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" />
<label for="author"><small><?php _e('Name'); ?> <?php if ($req) _e('(required)'); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" />
<label for="email"><small><?php _e('Mail (will not be published)');?> <?php if ($req) _e('(required)'); ?></small></label></p>



<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> <?php printf(__('You can use these tags: %s'), allowed_tags()); ?></small></p>-->

<p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php esc_attr_e('Submit Comment'); ?>" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php else : // Comments are closed ?>
<p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
<?php endif; ?>
</div>
</div>