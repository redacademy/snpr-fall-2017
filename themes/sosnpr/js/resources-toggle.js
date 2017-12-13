(function($){

    $('.resources-ul .fa-angle-down').toggleClass('hide');
    
    $('.resources-heading').on('click', function(){
      $(this).parent().find('.resources-content').toggleClass('hide');
  
      $(this).find('.fa-angle-right').toggleClass('hide');
      $(this).find('.fa-angle-down').toggleClass('hide');    
      
    });
  
})(jQuery);