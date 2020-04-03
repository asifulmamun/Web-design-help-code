<!----Background dynamic footetarea---->
<?php $footerarea = ot_get_option( 'footerbg', array() ); ?>
<div style="background-color: <?php if($footerarea['background-color']){echo $footerarea['background-color'] ; }else{ echo '#212020';} ?>;
background-repeat:<?php if($footerarea['background-repeat']){echo $footerarea['background-repeat'] ; }else{ echo 'repeat-x';} ?>;
background-attachment:<?php if($footerarea['background-attachment']){echo $footerarea['background-attachment'] ; }else{} ?>;
background-position:<?php if($footerarea['background-position']){echo $footerarea['background-position'] ; }else{} ?>;
background-image:url(<?php if($footerarea['background-image']){echo $footerarea['background-image'] ; }else{} ?>) ;" class="footerarea">
  <div class="social">
            <div class="ic" align="right">
            <a href="http://facebook.com/<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'fsfb') ) : ?><?php get_option_tree( 'fsfb', '', 'true' ); ?><?php else : ?>asifulmamun<?php endif;  endif; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/fb.png" class="icon" width="30px" height="28px" alt="icon">
            </a>
            <a href="http://twitter.com/<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'fstw') ) : ?><?php get_option_tree( 'fstw', '', 'true' ); ?><?php else : ?>asifulmamun<?php endif;  endif; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tw.png" class="icon" width="30px" height="28px" alt="icon">
            </a>
            <a href="http://plus.google.com/<?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'fsgp') ) : ?><?php get_option_tree( 'fsgp', '', 'true' ); ?><?php else : ?>113970772950008536516<?php endif;  endif; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gg.png" class="icon" width="30px" height="28px" alt="icon">
            </a>
            <!--ic--->
        </div>		
<!--social--->
</div>

 <!-----footer Widget----->
         <?php if ( is_active_sidebar( 'ft' ) ) : ?>
			<div class="ftp" >
				<?php dynamic_sidebar( 'ft' ); ?>
			</div>
		<?php endif; ?>



<div class="footerareatext">
<div class="footertext"> 
 <p><?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'footertextp') ) : ?><?php get_option_tree( 'footertextp', '', 'true' ); ?>
<?php else : ?>
						Please Customize Your footer text in  admin mode go to Appearence theme option then click menu of Footer Edit and search a text box for footer text then write your all text in the text area box.
					<?php endif;  endif; ?></p>
</div>
<!--footertext--->
</div>
<!-- footerareatext --->


<div class="ftml"></div>
<div class="fsiten">
<h1 id="fmenu"><?php bloginfo('name'); ?> Site Service</h1>

<?php
         			wp_nav_menu(array('theme_location' => 'footermenu', '
    container_class' => 'fsiten', 'fallback_cb' => 'wpj_default_menu'));
	?>
	
<ul>
<li><?php
if ( is_user_logged_in() ) {
	$current_user = wp_get_current_user();
	echo '<a style="font-family: arial;" href="/wp-login.php?action=logout">Log Out</a><small>(<i>@'.$current_user->user_login.'</i>)</small>
	';} 

else {
	echo 'Please <a style="font-family: arial;" href="/wp-admin">Login</a> | <a style="font-family: arial;" href="/wp-login.php?action=register">Register</a>';}
	?></li>
</ul>
<!---fsiten--->
</div>

<span class="copy">
&copy right by <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'fcopy') ) : ?><?php get_option_tree( 'fcopy', '', 'true' ); ?>
<?php else : ?>
						Al Mamun 2017 (edit theme option footer edit copyright)
					<?php endif;  endif; ?>
</span>

<!--end footer area--->
</div>






<div class="tp">
        <a href="#top">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top.png" width="30px" height="30px" alt="top">
        </a>
    </div>
<?php wp_footer(); ?>
</body>
</html>