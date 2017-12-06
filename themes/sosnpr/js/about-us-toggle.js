(function($){
  $(".about-us-heading").on('click',function(event){
    event.preventDefault();
    
    $(this).toggleClass('heading-click');
    $(this).siblings().toggleClass('about-us-essay-show');
    $(this).parent().siblings().children().removeClass('about-us-essay-show heading-click');
    
    
  })





})(jQuery);