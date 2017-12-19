(function ($) {
  
    $('.main-navigation  .search-submit').on('click touchstart', function (e) {
      e.preventDefault();
      
      $('.main-navigation  .search-field').stop().animate(
        {width:200},"slow").focus();
      $('.main-navigation  .search-submit').addClass("search-bar-open");
      $('.main-navigation  .menu-toggle').addClass("search-bar-open");
      
      // listen for enter key and submit form
      $(document).on('keydown', function(event){
        if(event.which == 13 && $('.main-navigation  .search-field').val() != ''){
          $('.main-navigation .search-form').submit();
        }
        if(event.which == 13 && $('.main-navigation  .search-field').val() == ''){
          event.preventDefault();
        }
      });
  
    });
  
    $('.main-navigation .search-field').on('blur', function(){
      $('.main-navigation .search-field').stop().animate(
        {
          width:0
        }, 500
      );

      $(document).unbind('keydown');
        
        function showIcons(){
          $('.main-navigation .search-submit').removeClass("search-bar-open");
          $('.main-navigation .menu-toggle').removeClass("search-bar-open");
        }

        setTimeout(showIcons, 501);  
  
    });




  // displaying on click for proposed parks
   $('.title').on('click', function(){
   

    $(this).siblings().find('.text').addClass('show');
    $(this).parent().addClass('border');
    $(this).find('.down').addClass('see');
    $(this).find('.right').addClass('hide');
   

  $('.close-section').on('click', function(e){
    e.preventDefault();
    var activeContent =  $(this).parents().find('.show');
    console.log(activeContent);
    activeContent.removeClass('show');
    // activeContent.removeClass('border');
    $('.prop-item').removeClass('border');
    $(this).parents().find('.down').removeClass('see');
    $(this).parents().find('.right').removeClass('hide');
    
  });

});


  
  })(jQuery);

//   $('.prop-item').on('click', function(e){
//     e.preventDefault();
//    $(this).find('.text').toggleClass('show');
//    $(this).toggleClass('border');
   
//    $(this).find('.down').toggleClass('see');
//    $(this).find('.right').toggleClass('hide');
//  })


//$(this).siblings().find('.text').addClass('border');