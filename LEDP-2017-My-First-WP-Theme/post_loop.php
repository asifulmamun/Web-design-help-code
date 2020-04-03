<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="ppwrap">
<div class="pwrap">

  <div class="wraptop">
   <div class="tview">
       <?php echo getPostViews(get_the_ID()); ?>
    </div>
  </div>


  <div class="fullpost">
  
             <a href="<?php the_permalink(); ?>"><?php
// Recent post thumbnail.

if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'post-image', array('class' => 'dthumb'));
}
else {
	echo '<img width="150px" height="150px" src="'.get_bloginfo('template_url').'/img/dthumb.jpg" class="ddthumb" alt="No image" />';
} ?></a>
                <span class="ptitle"><h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1></span>
           <!---stop ptitle--->
              
              <span class="pcont"><p><?php echo wp_trim_words( get_the_content(),60, '... <a href="'. get_permalink($post->ID) . '"></a>' ); ?></p></span>
         
  <!----stop full post---->
  </div>
 <!---stop pwrap--->
</div>

<div class="bpost"> 
<div style="font-family: mf;" class="bpostl">
Post by <?php the_author_posts_link(); ?> on <?php the_category( ', ' ) ?> | 
<?php echo human_time(); ?> at 
<?php the_time( get_option( 'time_format' ) ) ?> | 
<a href="<?php the_permalink(); ?>#comments"><?php comments_number( 'No Comment', '1 Comment', '% Comments' ); ?></a>
</div>
<div class="bpostr">
<a href="<?php the_permalink(); ?>">Read Full</a>
</div>
<!---stop bpost---->
</div>
 <!---stop ppwrap--->
</div>
<div class="clear"></div>
<?php endwhile; else: ?>
<?php endif; ?>