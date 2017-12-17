(function($){
  var clearForm= false;

  $('.subscribe-button').on('click touchstart', function(event){

    event.preventDefault();

    $('.form-popup').addClass('form-popup-show');
    $('#mce-EMAIL').focus();

    clearForm= false;
  })

  $('#mc-embedded-subscribe-form').on('click touchstart',function(){
    clearForm= false;
  })


  $('#mc-embedded-subscribe').on('click touchstart',function(){
  
    $('#mc-embedded-subscribe-form').submit();

    clearForm= false;
  })

  $('html').on('click touchstart',function(){
   
    if (clearForm){
      $('.form-popup').removeClass('form-popup-show');
    }
    clearForm = true;
  })

  $('#closing-icon').on('click touchstart',function(){
    $('.form-popup').removeClass('form-popup-show');
  })
 
  

})(jQuery)
