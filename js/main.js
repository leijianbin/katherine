$(function () {


$('.dl-menu li').click(function(){
   
  
});

$('.dl-trigger').click(function(){
    
});

  $(window).on("hashchange", function () {
    window.scrollTo(window.scrollX, window.scrollY + 100);
});
  
 $(function () {

      $('.gotocontact').click(function(){
        $("html, body").animate({ scrollTop: $("#contact").offset().top }, 600);
        return false;

      });

 });

    });


$('.header').sticky({
 	
 	 getWidthFrom: '.container',
  responsiveWidth: true
 
});

























