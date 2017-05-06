$('.carousel').carousel();
$(document).ready(function(){
   $("#circle").click(function(){
       if($(".navBar li").hasClass("showContetn")==false){
            $(".navBar li").addClass("showContetn");
            $(".navBar li").animate({left:'-20px',opacity:1});
       }
       else{
           $(".navBar li").animate({left:'20px',opacity:0});
           /*$(".navBar li").delay(100).queue(function() {  // Wait for 1 second.
            $(".navBar li").removeClass("showContetn").dequeue();
            });*/ //we can igonre using queue and de queue by using setTimeOut method
           
           setTimeout(function(){
               $(".navBar li").removeClass("showContetn");
           },500)
       }
      
   });
    
      
});

