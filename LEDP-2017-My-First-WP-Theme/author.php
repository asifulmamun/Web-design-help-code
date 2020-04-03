<?php get_header(); ?>

			 <div class="clear"></div>
			
<div class="wraper">
<div class="contentarea">
<!---wraper start up to div---->


<div class="content">
<!-----star content div up----->
     
     
     <?php
if(isset($_GET['author_name'])) :
$curauth = get_userdatabylogin($author_name);
else :
$curauth = get_userdata(intval($author));
endif;
?>
<div class="clear"></div>

     <div class="recentpostin"><?php bloginfo( 'name' ); ?> profile of <?php the_author(); ?></div>
     <table style="background-color: #f5f5f5; padding: 5px; color: #444;"width="100%"><tr>
<td width="75px"><?php echo get_avatar( get_the_author_meta('email'), '70' ); ?></td>
<td><h3>@<?php echo $curauth->user_login; ?></h3>
<div class="user_role"><?php $aid = get_the_author_meta('ID'); 
echo get_user_role($aid); ?></div>
<p><?php echo $curauth->user_description; ?></p> <p><span>Registered:</span> <?php echo $curauth->user_registered; ?></p><p><span>User ID:</span> <?php the_author_id(); ?></p>
<p><span>User Posts:</span> <?php the_author_posts(); ?></p>
</td>
</tr></table>
     
     
     <div class="clear"></div> <div class="clear"></div> <div class="clear"></div>
     
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
<!-----end sidebar div down----->
</div>

<!----wraper end dwon two div---->  
</div>
</div>





<?php get_footer(); ?>