(function($){
  var clearForm= false;

  $('.subscribe-button').on('click', function(event){

    event.preventDefault();

    $('.form-popup').addClass('form-popup-show');
    $('#mce-EMAIL').focus();

    clearForm= false;
  })

  $('#mc-embedded-subscribe-form').on('click',function(){
    clearForm= false;
  })


  $('#mc-embedded-subscribe').on('click',function(){
  
    $('#mc-embedded-subscribe-form').submit();

    clearForm= false;
  })

  $('html').click(function(){
   
    if (clearForm){
      $('.form-popup').removeClass('form-popup-show');
    }
    clearForm = true;
  })

  $('#closing-icon').click(function(){
    $('.form-popup').removeClass('form-popup-show');
  })
 
  

})(jQuery)
