$(document).ready(function() {
    // Add any jQuery functionality here
    // For example, smooth scrolling to section when clicking on navigation links
    $('a').on('click', function(e) {
      if (this.hash !== '') {
        e.preventDefault();
  
        const hash = this.hash;
  
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800);
      }
    });
  });
  