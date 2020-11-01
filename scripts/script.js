$(document).ready(function(){
    
    $("#btt").on("click",function(){
		console.log($("html").scrollTop());
		$("html").animate({scrollTop:0},500);
	});
    
    $('.slider').bxSlider({
        controls:false,
        auto:true,
        pause:5000,
        useCSS:false,
    });
    
    
  
    

});
