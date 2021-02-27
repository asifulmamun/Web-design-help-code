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
	   <span class="spcontente"><?php edit_post_link('Edit page', '<p>', '</p>'); ?></span>
	   </div>
	   <div class="clear"></div>
	
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

 <?php get_footer(); ?>