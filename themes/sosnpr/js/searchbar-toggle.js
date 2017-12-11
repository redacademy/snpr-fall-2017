(function ($) {
  
    $('.search-submit').on('click', function (e) {
      e.preventDefault();
  
      $('.search-field').stop().animate(
        {width:200},"slow").focus();
      $('.search-submit').toggleClass("search-bar-open");
      $('.menu-toggle').toggleClass("search-bar-open");
  
    });
  
    $('.search-field').on('blur', function(){
      $('.search-field').stop().animate(
        {width:0}, 500);

        function showIcons(){
          $('.search-submit').toggleClass("search-bar-open");
          $('.menu-toggle').toggleClass("search-bar-open");
        }
        setTimeout(showIcons, 501);

       
  
    });





  //  $('.menu-item').on('click', function(){
  //    $(this).children().toggleClass('show');
  //    $(this).toggleClass('border');
     
  //    $(this).find('.down').toggleClass('see');
  //    $(this).find('.right').toggleClass('hide');
     
     
  //  })


  // displaying on click for proposed parks
   $('.menu-item').on('click', function(){
    $(this).find('.text').toggleClass('show');
    $(this).toggleClass('border');
    
    $(this).find('.down').toggleClass('see');
    $(this).find('.right').toggleClass('hide');
  })

 //smooth scroll
  $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 2000);
  });


  //feedback form appear on click and remove if anywhere else is clicked
var remove = true;


$(".feedback-button").click(function () {
    $(".feedback").toggleClass('show');
    remove = false;
});


$(".feedback").click(function() {
    remove = false;
});


$("html").click(function () {
    if (remove) {
        $(".feedback").removeClass('show');
        
    }
    remove = true;
});

$('.wpcf7-submit').on('click', function(){
  if ( $('.wpcf7').find('.wpcf7-response-output')) {
    $('.para').css('display', 'none');
    
    $('.feedback').css('min-height', '480px');
     
  var truth = $('form').hasClass('sent');

  console.log(truth);

    
    
    
  }
});









  
  
  
  
  })(jQuery);