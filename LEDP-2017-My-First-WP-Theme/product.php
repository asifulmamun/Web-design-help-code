<?php
   global $post;
   $args = array( 'posts_per_page' =>4, 'post_type'=> 'product' );
    $productpost = get_posts( $args );

                foreach( $productpost as $post ) : setup_postdata($post); ?>
<center>				
<div class="wrapproduct">
  <div class="imagepr">
   <a href="<?php the_permalink(); ?>">
      <img src="<?php $product_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'product-image' ); echo $product_image[0]; ?>" alt="product" title="<?php the_ID(); ?>" class="productthumb"/>
	 </a>
  <!---end imagepr--->
  </div>
  
  <div class="textpr">
     <div class="textprt">
	 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
     <!---end textprt--->
     </div>
     <br>
      <div class="valu">
        <div class="valu1">
          <strike><?php echo $text= get_post_meta($post->ID, 'valu1', true); ?></strike>
	 <!---end valu1--->
       </div>
       <br>
		<div class="valu2">
       <?php echo $text= get_post_meta($post->ID, 'valu2', true); ?>
	 <!---end valu2--->
       </div>
		
	 <!---end value--->
      </div>
  <!---end textpr--->  
  </div>
  
<!---end wrapproduct--->
</div>
</center>

<?php endforeach; ?>

  <div class="moreproduct"><span><a href="/product">Show More Product</a><span></div>