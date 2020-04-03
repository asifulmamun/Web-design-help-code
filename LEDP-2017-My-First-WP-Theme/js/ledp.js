       //start java for menu hide/show
        
        $(document).ready(function(){
        $(".mn").hide(); //for default disply none
        	$(".menulogo1 img").click(function(){
        		$(".mn").toggle(800);// when menu image click show menu bar
        		
        		});
        		
        		});
        		
        		
  // for menu image rotate
    $(document).ready(function(){
        $('.menulogo1 img').click(function(){
    $(this).css({
        "-webkit-transform": "rotate(90deg)",
        "-moz-transform": "rotate(90deg)",
        "-ms-transform": "rotate(90deg)",
        "-o-transform": "rotate(90deg)",
        "transform": "rotate(90deg)",
        "transition": "0.6s"
         /* For modern browsers(CSS3)  */
    });
});

       $('.menulogo1 img').hover(function(){
    $(this).css({
        "-webkit-transform": "rotate(360deg)",
        "-moz-transform": "rotate(360deg)",
        "-ms-transform": "rotate(360deg)",
        "-o-transform": "rotate(360deg)",
        "transform": "rotate(360deg)",
        "transition": "0.8s"
         /* For modern browsers(CSS3)  */
    });
}); 
});
      
    