(function ($) {
  
  var clearMenu = false;


  $('.menu-item-106 a').on('click touchstart', function (e) {
    e.preventDefault();

    clearMenu = false;

    
  });

  $('.menu-item-106').addClass('subscribe-button');

  $('.menu-toggle').on('click touchstart',function(e) {
    e.preventDefault();
    
    $('.menu1').addClass('menu-show');

    clearMenu = false;
  
  });

    
  $('html').on('click touchstart',function() {

    if(clearMenu){

        $('.menu1').removeClass('menu-show');
    }
    clearMenu = true;

  });

$('.subscribe-button').click(function() {

  $('.menu1').removeClass('menu-show');

});

   
   
    

  
  })(jQuery);