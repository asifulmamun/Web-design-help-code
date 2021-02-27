
<div class="recentpost" style="font-family: mf;">Recent Post</div>

<?php query_posts('post_type=post&post_status=publish&posts_per_page=5&paged='.get_query_var('paged')); ?>

<?php get_template_part(post_loop); ?>

<div class="clear"></div>
<div class="clear"></div>

<center><div class="pagination"><div class="navigation">
<?php wpbeginner_numeric_posts_nav(); ?>
</div></div></center>