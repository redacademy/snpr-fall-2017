
(function ($) {





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
  $('.wpcf7-response-output').removeClass('center');
  
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
    $('.feedback').css('min-width', '400px');
    
    
  });
  $(document).ajaxComplete(function(){
    $('.wpcf7').css('border', '8px solid #eb8e26');

    if ( $('.wpcf7-form').find('.wpcf7-not-valid-tip').length > 0){
      $('input').show();
      $('textarea').show();
      $('.feedback').css('min-height', '465px');
      $('.wpcf7-response-output').css('padding-bottom', '0');
    

    } else {
      $('.wpcf7-response-output').addClass('center');
      $('.feedback').css('min-height', '280px');
      
      

      
      
    }
    
  });
  if ( $('.wpcf7').find('.wpcf7-response-output')) {
    $('.para').hide();
    // $('.feedback').css('min-height', '480px');
     
  setTimeout(function(){
    var greatSuccess = $('.wpcf7-form').hasClass('sent');
     
    if (greatSuccess){
      
      
      // $('.wpcf7-response-output').css('padding-bottom', '100px');
      $('input').hide();
      $('textarea').hide();
      
      
      
      
      
    }
  }, 1000);
   
 
}

});

})(jQuery);