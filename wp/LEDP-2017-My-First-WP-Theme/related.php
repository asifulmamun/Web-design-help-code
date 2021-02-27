<div class="relarea">

<marquee
behaiver="scroll"
scrollamount="8"
direction="up"
onmouseover="this.stop();"
onmouseout="this.start();">
<?php
	$category = get_the_category(); //it first current category ID
	$this_post = $post->ID; // get ID of current post
	$posts = get_posts('numberposts=5&category=' . $category[0]->cat_ID . '&exclude=' . $this_post);
	foreach($posts as $post) { ?>
	<div class="clear"></div>
	 <div class="rel">
	 <a href="<?php the_permalink(); ?>">
<?php
// Related post thumbnail.

if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'post-image', array('class' => 'rdthumb') );
}
else {
	echo '<img src="' . get_bloginfo( 'template_url' ) . '/img/dthumb.jpg" class="rddthumb" alt="No image" />';
} ?>
</a>
<span class="rtitletime">
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
<br>
<?php the_time( get_option( 'date_format' ) ) ?> - <?php the_time( get_option( 'time_format' ) ) ?>
</span>
<!----relarea---->
</div>

<?php wp_reset_postdata(); } ?>
</marquee>
</div> <div class="clear"></div>