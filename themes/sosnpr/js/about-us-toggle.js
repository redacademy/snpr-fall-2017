(function($){
  $(".about-us-heading").on('click',function(event){
    event.preventDefault();
    
    $(this).toggleClass('heading-click');
    $(this).parent().toggleClass('list-item-click');
    
    $(this).siblings().find('.about-us-essay-hide').toggleClass('about-us-essay-show');
    $(this).parent().siblings().removeClass('list-item-click');
    $(this).parent().siblings().children().removeClass('heading-click');
    $(this).parent().siblings().find('.about-us-essay-hide').removeClass('about-us-essay-show');
    
    
  })



})(jQuery);


