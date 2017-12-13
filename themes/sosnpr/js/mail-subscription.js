(function($){
  var clearForm= false;

  $('.subscribe-button').on('click', function(event){
    event.preventDefault();
    console.log('yo');
    $('.form-popup').addClass('form-popup-show');
    $('#mce-EMAIL').focus();
    // clearForm = true;
    clearForm= false;
  })

  $('.form-popup').on('click',function(){
    clearForm= false;
  })



  $('#mc-embedded-subscribe').on('click',function(){
    // event.preventDefault();
    $('#mc-embedded-subscribe-form').submit();
    // // on('submit',function(){
    //   console.log('works');

    // $('#mce-EMAIL').val('');
    // // });
   
    clearForm= false;
  })


  // $('.subscribe-submit').click(function(){
  //   console.log('hey');
  //   $(document).ajaxSuccess(function(){
  //     $('#mce-EMAIL').val('');

  //   })
   
  //   // $('#mc-embedded-subscribe-form').trigger('reset');
  // })


  $('html').click(function(){
    // e.preventDefault();
    if (clearForm){
    $('.form-popup').removeClass('form-popup-show');
    }
    clearForm = true;
  })

  $('#closing-icon').click(function(){
    $('.form-popup').removeClass('form-popup-show');
  })
 
  
  

})(jQuery)
