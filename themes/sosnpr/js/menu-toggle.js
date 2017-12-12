(function ($) {
  
  var clearMenu = false;


  $('.menu-item-106 a').on('click', function (e) {
    e.preventDefault();

    clearMenu = false;

    
  });

  $('.menu-item-106').addClass('subscribe-button');

  $('.menu-toggle').click(function(e) {
    e.preventDefault();
    
    $('.menu1').addClass('menu-show');

    clearMenu = false;
  
  });

    
  $('html').click(function() {

    if(clearMenu){

        $('.menu1').removeClass('menu-show');
    }
    clearMenu = true;

  });

$('.subscribe-button').click(function() {

  $('.menu1').removeClass('menu-show');

});

   
   
    

  
  })(jQuery);