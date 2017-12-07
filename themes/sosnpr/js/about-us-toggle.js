(function($){
  $(".about-us-heading").on('click',function(event){
    event.preventDefault();
    
    $(this).toggleClass('heading-click');
    $(this).parent().toggleClass('list-item-click');
    
    $(this).siblings().toggleClass('about-us-essay-show');
    $(this).parent().siblings().removeClass('list-item-click');
    $(this).parent().siblings().children().removeClass('about-us-essay-show heading-click');
    
    
  })


//smooth scrolling code from css tricks 
  //https://css-tricks.com/snippets/jquery/smooth-scrolling/
  // Select all links with hashes
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        
        $('html, body').animate({
          scrollTop: target.offset().top
          // scrollTop: target.offset().top - $('nav').outerHeight()//subtracting nav bar height, from the top offset
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.focus(); // Set focus again
          }
        });
      }
    }
  });
  // Fix "Skip Link" Focus in Webkit
$("a[href^='#']").not("a[href='#']").click(function() {
  $("#"+$(this).attr("href").slice(1)+"").focus();
});


})(jQuery);


