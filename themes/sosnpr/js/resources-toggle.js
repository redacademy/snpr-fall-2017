(function($){
  
  // if ($('.resources-ul').length){
  
  $('.resources-ul .fa-angle-down').toggleClass('hide');
  $('.resourecs-ul .borders').toggleClass('hide');
  $('.resources-heading').on('click', function(){
    $(this).parent().find('.resources-content').toggleClass('hide');
    
    $(this).find('.fa-angle-right').toggleClass('hide');
    $(this).find('.fa-angle-down').toggleClass('hide');    
    
  });
// }
})(jQuery);