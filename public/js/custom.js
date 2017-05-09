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


/********************************* sigup validation*************************/

$(document).ready(function(){
    'use strict';
    var x=true,y=true,z=true;

    
   $(".mail,.username").blur(function(){
      if($(this).val().length==0){
          $(this).css("border","1px solid red");
          x=true;
      } 
       
   });
    
////////////////////////////// password
    
    $(".pass").blur(function(){
      if($(this).val().length==0 && $(this).val().length < 8 ){
          $(this).css("border","1px solid red");
          y=true;
      } 
   });

    
//////////////////////////////////
    $(".signupform").submit(function(e){
           
        if(x===true||y===true||z===true){
            e.preventDefault(); 
            $(".mail,.pass,.username").blur();
        }
 
    });

});