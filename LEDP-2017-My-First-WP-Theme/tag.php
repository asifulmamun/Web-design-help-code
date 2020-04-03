<?php get_header(); ?>
<div class="sponsored_block">
Tag of post
</div>
<div class="clear"></div>

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
<?php get_sidebar(); ?>
<!-----end sidebar div down----->
</div>


<!----wraper end dwon two div---->  
</div>
</div>

<?php get_footer(); ?>