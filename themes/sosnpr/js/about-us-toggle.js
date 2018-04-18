(function($){
  // var scroll = false;
  
  $('.about-us-heading').on('click touchstart',function(event){
    event.preventDefault();
    
    // if (scroll){
    //   setTimeout(function(){
    $(this).toggleClass('heading-click');
    $(this).parent().toggleClass('list-item-click');
    
    $(this).siblings().find('.about-us-essay-hide').toggleClass('about-us-essay-show');
    // }, 1000);
    // }
    // scroll = true;
    // $(this).parent().parent().find('.about-us-essay-hide').removeClass('list-item-click');
    
  })
  
  $('.scroll-up').on('click touchstart', function(){
    
    $(this).siblings().removeClass('heading-click');
    $(this).siblings().find('.about-us-essay-hide').removeClass('about-us-essay-show');
    $(this).parent().removeClass('list-item-click');

    $(this).children().css('color', '#fff');
    // setTimeout(function(){
    
    // }, 1000);
    
    // scroll = true;
    window.scrollTo(0,300); // scroll to the top
    
    return false;
  })
  
  
})(jQuery);


