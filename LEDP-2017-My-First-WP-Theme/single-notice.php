<?php get_header();?>
<div class="singlewrap">

    <?php if(have_posts()) : ?>
   <?php while(have_posts())  : the_post(); ?>


<div class="spfull">
	  <div class="subspfull">
	   <div class="sptitile">
	    <a href="<?php bloginfo('home'); ?>">Home</a> » <?php the_title(); ?>
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
		   <p>The Notice Published by Administrator.</p>
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
<div class="recentpostin">Comments Of The Notice Board</div>
<div class="cment">
<?php comments_template( '', true ); ?>
</div>

<!-----end content div down----->
</div>



<div class="sidebar">
<div class="recentpostin">Releted Notice Show</div>
<?php get_template_part(related_notice); ?>


</div>


<!----wraper end dwon two div---->  
</div>
</div>
		

	
 <?php get_footer(); ?>