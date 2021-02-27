<?php 
/**
 *The template for displaying 404 pages (not found)
**/
get_header(); ?>
           
			
<div class="wraper">
<div class="contentarea">
<!---wraper start up to div---->
<br><br>

<div style="min-height: 600px; border: 1px solid #333;" class="content">
<br><br><br>
<h1 style="color: red;
font-size: 25px;
line-height: 30px;
text-shadow: 1px 3px 2px rgba(15,15,0,0.2);">404 Can Not Found Content, <br> Please try again or search</h1>
<br>
<br>
<?php get_search_form(); ?>
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