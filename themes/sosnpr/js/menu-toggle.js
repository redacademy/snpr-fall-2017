(function ($) {
  
  var clearMenu = false;
  
  
  // $('.menu-item-106 a').on('click touchstart', function (e) {
  //   e.preventDefault();
  
  //   clearMenu = false;
  
  $('.menu-item-106 a').addClass('subscribe-button');
  
  // });
  
  
  
  //function to display/remove menu when click on hamberger icon
  $('.menu-toggle').on('click touchstart',function(e) {
    e.preventDefault();
    
    $('.menu1').addClass('menu-show').focus('menu1');
    
    clearMenu = false;
    
  });
  
  //below two functions for removing dropdown menu when click off of it
  $('html').on('click touchstart',function() {
    
    if(clearMenu){
      
      $('.menu1').removeClass('menu-show');
    }
    clearMenu = true;
    
  });
  $('.menu1').on('click touchstart', function(){
    clearMenu = false;
  })
  
  // function for remove the menu when subcribe button is pressed
  $('.subscribe-button').on('click touchstart',function() {
    
    $('.menu1').removeClass('menu-show');
    
  });
  
  
  $('.menu-item-76').on('click touchstart',function() {
    
    setTimeout(function(){
      $('.menu1').removeClass('menu-show');
    }, 500);
    
  });
  
  
})(jQuery);