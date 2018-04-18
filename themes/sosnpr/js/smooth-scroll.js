//smooth scrolling code from css tricks 
  //https://css-tricks.com/snippets/jquery/smooth-scrolling/
  // Select all links with hashes
(function($){$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') 
      && 
      location.hostname === this.hostname
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
          if ($target.is(':focus') || $target.is(':active')) { // Checking if the target was focused
            return false;
          } else {
            $target.focus(); // Set focus again
          }
        });
      }
    }
  })
})(jQuery);