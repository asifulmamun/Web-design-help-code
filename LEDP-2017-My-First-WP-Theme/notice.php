 <div class="marquee">
    <div class="fixedmarquee">
	  <b>Notice</b>
    </div>
   <marquee class="mar" behavior="scroll" direction="left" scrollamount="8" onmouseover="this.stop();" onmouseout="this.start();">
          			
					
	<!--custom post-->
				
            <?php
                global $post;
                $args = array( 'posts_per_page' =>4, 'post_type'=> 'notice' );
                $myposts = get_posts( $args );

                foreach( $myposts as $post ) : setup_postdata($post); ?>
                
            
              
          
           <a href="<?php the_permalink(); ?>"> * <?php the_title(); ?> </a>
        
        <?php endforeach; ?>
        
        
       
        </marquee>
 </div>       
 