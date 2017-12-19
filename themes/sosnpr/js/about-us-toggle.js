(function($){
  // var scroll = false;
  
  $(".about-us-heading").on('click touchstart',function(event){
    event.preventDefault();
    
    // if (scroll){
    //   setTimeout(function(){
    $(this).addClass('heading-click');
    $(this).parent().addClass('list-item-click');
    
    $(this).siblings().find('.about-us-essay-hide').addClass('about-us-essay-show');
    // }, 1000);
    // }
    // scroll = true;
    // $(this).parent().parent().find('.about-us-essay-hide').removeClass('list-item-click');
    
  })
  
  $('.scroll-up').on('click touchstart', function(){
    
    $(this).siblings().removeClass('heading-click');
    $(this).siblings().find('.about-us-essay-hide').removeClass('about-us-essay-show');
    $(this).parent().removeClass('list-item-click');
    // setTimeout(function(){
    
    // }, 1000);
    
    // scroll = true;
    // window.scrollTo(0,300); // scroll to the top
    
    
  })
  
  
})(jQuery);


