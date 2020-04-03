

<?php

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>

<p class="nocomments">Password protected.</p>
<?php
		return;
	}
?>

<div class="block_comment">
<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>

<div class="navigation">
<div class="previous">
<?php previous_comments_link() ?>
</div>

<div class="next"> 
<?php next_comments_link() ?>
</div>
</div>

<ol class="commentlist">
<?php wp_list_comments('avatar_size=32'); ?>
</ol>

<div class="navigation">
<div class="previous">
<?php previous_comments_link() ?>
</div>
<div class="previous">
<?php next_comments_link() ?>
</div>
</div>

<?php else : ?>

<?php if ('open' == $post->comment_status) : ?>


<?php else : ?>

<p>comment closed</p>

<?php endif; ?>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>



<div id="respond">

<h3>Leave a Reply</h3>

<div class="cancel-comment-reply"><small>
<?php cancel_comment_reply_link(); ?>
</small></div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php print 'You must be'; ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php print 'Logged in'; ?></a> <?php print 'to post comment'; ?>.</p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
      <?php if ( $user_ID ) : ?>
      <p>
<?php print 'Logged in as'; ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account"><?php print 'Log out'; ?> »</a>
</p>
<?php else : ?>
   <p>
        <input class="author" type="text" value="Enter your name" onclick="this.value='';" name="author" id="author" tabindex="1"/><label for="author"><small><?php if ($req) echo "(Required)"; ?></small></label>
      </p>
      
      <p><input class="email" type="text" value="Enter your email" onclick="this.value='';" name="email" id="email" tabindex="2"/><label for="email"><small>(Will not be published)<?php if ($req) echo " (Required)"; ?></small></label>
      </p>
      
      <?php endif; ?>
      <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
      <center><p>
        <textarea name="comment" id="comment" tabindex="4"></textarea>
      </p></center>
      <br>
      <center>
      <p>
        <input class="submit" name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
        <?php comment_id_fields(); ?>
      </p>
      </center>
      <br>
      <?php do_action('comment_form', $post->ID); ?>
    </form>

    <?php endif; // If registration required and not logged in 
    ?>
</div>
<?php endif; // if you delete this the sky will fall on your head 
?>
</div>