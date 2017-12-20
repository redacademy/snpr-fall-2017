(function($){
  
  // if ($('.resources-ul').length){
  
  $('.resources-ul .fa-angle-down').toggleClass('hide');
  $('.resources-heading').on('click', function(){
    $(this).parent().find('.resources-content').removeClass('hide');
    $(this).parent().addClass('borders');
    $(this).find('.fa-angle-right').addClass('hide');
    $(this).find('.fa-angle-down').removeClass('hide');    
    
    $('.mobile-button').on('click', function(){
    $('.li-container').removeClass('borders');
    $(this).parents().find('.resources-content').addClass('hide');
    });

  });
// }

  $('.resources-content .owl-wrapper-outer .owl-wrapper .owl-item img').on('click', function(event){
    event.preventDefault();
    
    var imgUrl = $(this).attr('src');
    alert('ALERT');
    
    $('html').append('<div class="modal-overlay"><img src="' + imgUrl + '"></div>');

    $('.modal-overlay').on('click', function(){
      $(this).remove();
      // $(this).detach();
    });
    
  });


})(jQuery);