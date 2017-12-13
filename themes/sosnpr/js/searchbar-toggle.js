(function ($) {
  
    $('.main-navigation  .search-submit').on('click', function (e) {
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
   $('.prop-item').on('click', function(){
    $(this).find('.text').toggleClass('show');
    $(this).toggleClass('border');
    
    $(this).find('.down').toggleClass('see');
    $(this).find('.right').toggleClass('hide');
  })




//feedback form appear on click and remove if anywhere else is clicked
var remove;


$(".feedback-button").click(function () {
 
  $(".feedback").toggleClass('see');
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
        $(".feedback").removeClass('see');
        
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