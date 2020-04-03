<?php get_header();?>
<div class="singlewrap">

    <?php if(have_posts()) : ?>
   <?php while(have_posts())  : the_post(); ?>


<div class="spfull">
	  <div class="subspfull">
	   <div class="sptitile">
	    <a href="<?php bloginfo('home'); ?>">Home</a> » <?php the_category(', '); ?> » <?php the_title(); ?>
	    <!---sptitle---->
	   </div>
	   <div class="clear"></div>
	   
	   <div class="spcontent">
	   <?php the_content(); ?>
	   <!---spcontent---->
	   <span class="spcontente"><?php edit_post_link('Edit Post', '<p>', '</p>'); ?></span>
	   </div>
	   <div class="clear"></div>
	   
	   <div class="author">
	     <div class="abtauthor">
		   <div class="titleabt">
		     This is About of Writter
		    <!---titleabt---->
	       </div>
	   <div class="abbtt">
		 <span class="prwr">
		    <?php echo get_avatar( get_the_author_meta('email'), '60' ); ?>
		  <!---prwr---->
		 </span>
		 
		 <span class="prwrc">
		    <center><p>About of <b class="gray"><?php the_author_posts_link(); ?></b>
		    <hr> <small><?php the_author_meta('description'); if(!get_the_author_meta('description')) _e('I am want to secreat my about on the platform.'); ?></small></p></center>
		    <hr>
			The writer Name is  <b> <?php the_author_posts_link(); ?></b>.
			<br> 
			He is 	<?php $aid = get_the_author_meta('ID'); 
echo get_user_role($aid); ?> of the site. 
<br>
Her post about of <?php setPostViews(get_the_ID()); ?> <?php echo getPostViews(get_the_ID()); ?>, her post published <?php the_date('d/m/y'); ?> that means <?php echo human_time(); ?>.
<br>
he is already publishe <?php the_author_posts(); ?> post.
<br>
Her fellings is <?php echo $text= get_post_meta($post->ID, 'fellings', true); ?> when he was written the post.


			
		  <!---prwrc---->
		 </span>
		
		 <!--- abbtt ---->
		 </div>
		 
	      <!---abtauthor---->
	     </div>
		 
	   <!---author---->
	   </div>
	
	  <!---subspfull---->
	  </div>
	  
	<!---spfull---->
	</div>

	<div class="clear"></div>
	

   		
						<?php endwhile; ?>

						<?php else : ?>
					<?php _e('404 Error&#58; Not Found', 'bilanti'); ?>
						<?php endif; ?>	
        
        
    <!--singlewrap--->
</div>


<div class="clear"></div>
<div class="wraper">
<div class="contentarea">
<!---wraper start up to div---->


<div class="content">
<div class="recentpostin">Comments Of The Post</div>
<div class="cment">
<?php comments_template( '', true ); ?>
</div>
<br>
<!-----Content Widget----->
         <?php if ( is_active_sidebar( 'commentwd' ) ) : ?>
			<div class="commentwdp" >
				<?php dynamic_sidebar( 'commentwd' ); ?>
			</div>
		<?php endif; ?>

<!-----end content div down----->
</div>



<div class="sidebar">
<div class="recentpostin">Releted Post</div>
<?php get_template_part(related); ?>

<div class="clear"></div>
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

<div class="clear"></div>
</div>


<!----wraper end dwon two div---->  
</div>
</div>
		

	
 <?php get_footer(); ?>