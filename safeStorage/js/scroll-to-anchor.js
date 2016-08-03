  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
$('.sidebar ul a').css({"font-weight": "normal"})
$(this).css({"font-weight": "bold"})

      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
 
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
