(function ($) {
  
  
  
  
  
  //feedback form appear on click and remove if anywhere else is clicked
  
  
  var remove;
  
  
  $(".feedback-button").on('click touchstart', function () {
    
    
    $(".feedback").toggleClass('see');
    $('.wpcf7-form').trigger('reset');
    $('input').show();
    $('textarea').show();
    $('.wpcf7-response-output').hide();
    $('.para').show();
    $('.feedback').css('min-height', '430px'); //change
    $('.wpcf7-not-valid-tip').hide();
    $('.wpcf7-response-output').css('padding-bottom', '0');
    $('.wpcf7-response-output').removeClass('center');
    $('.wpcf7').removeClass('response-width');
    $('.close').removeClass('lower');
    
    
    
    remove = false;
  });
  
  
  $(".feedback").on('click touchstart', function () {
    remove = false;
  });
  
  
  $("html").on('click touchstart', function () {
    if (remove) {
      $(".feedback").removeClass('see');
      
    }
    remove = true;
  });
  
  $('.close').on('click touchstart', function () {
    $('.feedback').removeClass('see');
  })
  
  $('.wpcf7-submit').on('click touchstart', function () {
    
    $(document).ajaxStart(function () {
      $('input').hide();
      $('textarea').hide();
      $('.wpcf7').css('border', 'none');
      $('.feedback').css('min-width', '300px')
      $('.wpcf7').css('min-width', '300px');
      $('.wpcf7').css('min-height', '300px');
      
      $('.feedback').css('visibility', 'hidden');
      
      
    });
    $(document).ajaxComplete(function () {
      $('.feedback').css('visibility', 'visible');
      $('.wpcf7').css('border', '8px solid #eb8e26');
      
      if ($('.wpcf7-form').find('.wpcf7-not-valid-tip').length > 0) {
        
        $('input').show();
        $('textarea').show();
        $('.feedback').css('min-height', '480px');
        $('.wpcf7-response-output').css('padding-bottom', '0');
        $('.close').addClass('lower');
        
        
      } else {
        
        
        $('.wpcf7-response-output').addClass('center');
        $('.wpcf7-response-output').addClass('fade-in');
        
        $('.feedback').css('min-height', '320px');
        $('.wpcf7').addClass('response-width');
      }
      
    });
    if ($('.wpcf7').find('.wpcf7-response-output')) {
      $('.para').hide();
      $('.feedback').css('min-height', '480px');
      
      
      setTimeout(function () {
        var greatSuccess = $('.wpcf7-form').hasClass('sent');
        
        if (greatSuccess) {
          
          
          
          $('input').hide();
          $('textarea').hide();
          
          
          
          
          
        }
      }, 1000);
      
      
    }
    
  });
  
})(jQuery);