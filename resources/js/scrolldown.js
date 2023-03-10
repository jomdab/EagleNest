$(document).ready(function() {
    var container = $('.question');
    var content = $('.bubble');
    var scrollDownBtn = $('.scroll-down-button');
  
    // Check if content overflows container on page load
    if (content.outerHeight() > container.outerHeight()) {
      scrollDownBtn.show();
    }
  
    // Check if content overflows container on window resize
    $(window).resize(function() {
      if (content.outerHeight() > container.outerHeight()) {
        scrollDownBtn.show();
      } else {
        scrollDownBtn.hide();
      }
    });
  
    // Scroll down to bottom of container when button is clicked
    scrollDownBtn.click(function() {
      container.scrollTop(content.outerHeight());
    });
  });