(function($){
  

  function initOwlMobile(){

    // console.log('callback run');

    $('.owl-carousel2').owlCarousel({
      center:true,
      nav:true,
      dots:true,
      dotsEach:true,
      dotData:true,
      loop:true,
      margin:10,
      responsiveClass:true,
      mouseDrag:true,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:3,
              nav:true
          },
          1000:{
              items:3,
              nav:true,
              loop:true,
          }
        }
    });
    
    $('.owl-carousel2 .owl-controls .owl-pagination span').css('display', 'block');
   }

  // if ($('.resources-ul').length){
  
  $('.resources-ul .fa-angle-down').toggleClass('hide');
  // $('.li-gallery').detach();
  $('.resources-heading').on('click', function(){
    // $('.resources-content').addClass('owl-carousel2');
    $(this).parent().find('.resources-content').toggleClass('hide');
    $(this).parent().toggleClass('borders');
    $(this).find('.fa-angle-right').toggleClass('hide');
    $(this).find('.fa-angle-down').toggleClass('hide');
    

    if($(this).hasClass('owl-block')){
      // console.log('resource owl present');
      $('.owl-carousel2').css('display', 'block');
      $('.owl-image').css('display', 'block');
      

      setTimeout(initOwlMobile(), 500);
      
    }
    // $('.resources-content').append('.li-gallery');
    
    $('.mobile-button').on('click', function(){
    $('.li-container').removeClass('borders');
    $(this).parents().find('.resources-content').addClass('hide');
    $('.fa-angle-right').removeClass('hide');
    $('.fa-angle-down').addClass('hide');
    window.scrollTo(0,400);
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