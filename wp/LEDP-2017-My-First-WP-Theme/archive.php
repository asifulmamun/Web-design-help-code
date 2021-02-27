<?php get_header(); ?>

			 <div class="clear"></div>
			
<div class="wraper">
<div class="contentarea">
<!---wraper start up to div---->


<div class="content">
<!-----star content div up----->
     
     
  <div class="clear"></div>
     
     <div class="recentpost"><span class="current">Articles posted by <?php the_author(); ?></span></div>
     
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
<div class="bpostl">
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
     
     <div class="clear"></div>
<div class="clear"></div>

<center><div class="pagination"><div class="navigation">
<?php wpbeginner_numeric_posts_nav(); ?></div></div></center>
        
<!-----end content div down----->
</div>


<div class="sidebar">
 <!-----sidebar start div up----->
<?php get_sidebar(); ?>

 <!-----top author----->
<div class="top_author">
<h2 id="topauthor">Top Writter</h2>
<br>
<div class="ttppaa">
<?php
global $wpdb;
$top_authors = $wpdb->get_results("
	SELECT u.ID, count(post_author) as posts FROM {$wpdb->posts} as p
	LEFT JOIN {$wpdb->users} as u ON p.post_author = u.ID
	WHERE p.post_status = 'publish'
	AND p.post_type = 'post'
	GROUP by p.post_author
	ORDER by posts DESC
	LIMIT 0,15
");
if( !empty( $top_authors ) ) {
	echo '<ul>';
	foreach( $top_authors as $key => $author ) {
		echo '<li><a href="' . get_author_posts_url( $author->ID ) . '">' . get_avatar( $author->ID , 50 ) . ' ' . get_the_author_meta( 'display_name' , $author->ID ) . '</a>
			(' . $author->posts . ') 
		</li>';
	}
	echo '</ul>';
}
?></div>
</div>


<!-----end sidebar div down----->
</div>

<!----wraper end dwon two div---->  
</div>
</div>

<?php get_footer(); ?>