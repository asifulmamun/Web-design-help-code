           <!----- first widget   sidebar----->
         <?php if ( is_active_sidebar( 'sidebar_wd' ) ) : ?>
			<div class="sidebarwdstyle" >
				<?php dynamic_sidebar( 'sidebar_wd' ); ?>
			</div>
		<?php endif; ?>
		
	<div class="clear"></div>
	
	 <div class="ads" style="background-image: url('<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'adswds1') ) : ?><?php get_option_tree( 'adswds1', '', 'true' ); ?><?php else : ?><?php echo get_template_directory_uri(); ?>/img/t1.jpg<?php endif;  endif; ?>');">
	  <p>
	   <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'adswdst1') ) : ?><?php get_option_tree( 'adswdst1', '', 'true' ); ?>
<?php else : ?>
						Please Customize Your advertisment text in  admin mode theme option advertisment edit option.
					<?php endif;  endif; ?>
	  </p>
	 </div>

    <div class="clear"></div>
  
 <!----- second widget   sidebar----->
         <?php if ( is_active_sidebar( 'sidebar_wdnd' ) ) : ?>
			<div class="sidebarwdstylend" >
				<?php dynamic_sidebar( 'sidebar_wdnd' ); ?>
			</div>
		<?php endif; ?>