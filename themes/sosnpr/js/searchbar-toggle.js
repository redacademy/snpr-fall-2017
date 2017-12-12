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
var remove;


$(".feedback-button").click(function () {
 
  $(".feedback").toggleClass('show');
  $('.wpcf7-form').trigger('reset');
  $('input').show();
  $('textarea').show();
  $('.wpcf7-response-output').hide();
  $('.para').show();
  $('.feedback').css('min-height', '430px');
  $('.wpcf7-not-valid-tip').hide();
  $('.wpcf7-response-output').css('padding-bottom', '0');
 
  
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

  $(document).ajaxStart(function(){
    $('input').hide();
    $('textarea').hide();
    $('.wpcf7').css('border', 'none');
    
    
  });
  $(document).ajaxComplete(function(){
    $('.wpcf7').css('border', '8px solid #eb8e26');

    if ( $('.wpcf7-form').find('.wpcf7-not-valid-tip').length > 0){
      $('input').show();
      $('textarea').show();
      $('.feedback').css('min-height', '480px');
      $('.wpcf7-response-output').css('padding-bottom', '0');
    

    } else {
      $('.feedback').css('min-height', '300px');
      
    }
    
  });
  if ( $('.wpcf7').find('.wpcf7-response-output')) {
    $('.para').hide();
    // $('.feedback').css('min-height', '480px');
     
  setTimeout(function(){
    var greatSuccess = $('.wpcf7-form').hasClass('sent');
     
    if (greatSuccess){
      
      
      $('.wpcf7-response-output').css('padding-bottom', '100px');
      $('input').hide();
      $('textarea').hide();
      
      
      
      
    }
  }, 1000);
   
 
}

});

  
  })(jQuery);