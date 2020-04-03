<?php get_header(); ?>
           
		   
	<!------slider------>
<div class="bnrr">	
	 <?php get_template_part('slider/nslider'); ?>
 </div>       
		
    <!--custom post for notice--> 
	<?php get_template_part(notice); ?>
			
			
			
<div class="wraper">
<div class="contentarea">
<!---wraper start up to div---->


<div class="content">
<!-----star content div up----->
     <?php get_template_part(content); ?>

<!-----end content div down----->
</div>


<div class="sidebar">
 <!-----sidebar start div up----->
 
 <div class="recentpostin">Notice Board</div>
 <div class="nmar">
    <marquee
behavior="scroll"
direction="up"
scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
 
 <?php query_posts('post_type=notice&post_status=publish&posts_per_page=8&paged='.get_query_var('paged')); ?>
          
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
           <a href="<?php the_permalink(); ?>"><ul style="list-style: none;"><li>* <?php the_title(); ?></li></ul></a>
        <?php endwhile; else: ?>
<?php endif; ?>
        
        </marquee>
        
        <span class="nmarm"><a href="/notice">Show All</a></span>
 <!---nmar--->       
 </div>
 
 <br>
<?php get_sidebar(); ?>
<!-----end sidebar div down----->
</div>


<!----wraper end dwon two div---->  
</div>
</div>
<br>
<br>
<!-----Content Widget----->
         <?php if ( is_active_sidebar( 'cnwd' ) ) : ?>
			<div class="cndwp" >
				<?php dynamic_sidebar( 'cnwd' ); ?>
			</div>
		<?php endif; ?>
<br>
<div class="wraper">
<div class="customcontent">
<?php get_template_part(product); ?>
</div>
</div>


<?php get_footer(); ?>