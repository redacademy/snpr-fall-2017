(function($){
  $(".about-us-heading").on('click touchstart',function(event){
    event.preventDefault();
    
    $(this).addClass('heading-click');
    $(this).parent().addClass('list-item-click');
    
    $(this).siblings().find('.about-us-essay-hide').toggleClass('about-us-essay-show');
    // $(this).parent().siblings().removeClass('list-item-click');
    // $(this).parent().siblings().children().removeClass('heading-click');
    // $(this).parent().siblings().find('.about-us-essay-hide').removeClass('about-us-essay-show');
    
  })

  $('.scroll-up').on('click touchstart', function(){
    $(this).siblings().removeClass('heading-click');
    $(this).siblings().find('.about-us-essay-hide').removeClass('about-us-essay-show');
    $(this).parent().removeClass('list-item-click');
    $(this).parent().siblings().removeClass('list-item-click');
    $(this).parent().siblings().children().removeClass('heading-click');

    window.scrollTo(0,0);
    // return true;
  })


})(jQuery);


