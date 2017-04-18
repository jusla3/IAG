// Scroll
$(document).ready(function(){
         $(window).scroll(function(){
            if ($(this).scrollTop() > 700) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });

        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 300);
            return false;
        });

    });
	
	

// Smooth scroll 
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
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


// Reveal on scroll 
$(function () {
    var $window = $(window), win_height_padded = $window.height() * 1.1, isTouch = Modernizr.touch;
    if (isTouch) {
        $('.revealOnScroll').addClass('animated');
    }
    $window.on('scroll', revealOnScroll);
    function revealOnScroll() {
        var scrolled = $window.scrollTop(), win_height_padded = $window.height() * 1.1;
        $('.revealOnScroll:not(.animated)').each(function () {
            var $this = $(this), offsetTop = $this.offset().top;
            if (scrolled + win_height_padded > offsetTop) {
                if ($this.data('timeout')) {
                    window.setTimeout(function () {
                        $this.addClass('animated ' + $this.data('animation'));
                    }, parseInt($this.data('timeout'), 10));
                } else {
                    $this.addClass('animated ' + $this.data('animation'));
                }
            }
        });
        $('.revealOnScroll.animated').each(function (index) {
            var $this = $(this), offsetTop = $this.offset().top;
            if (scrolled + win_height_padded < offsetTop) {
                $(this).removeClass('animated fadeInUp flipInX lightSpeedIn span fadeIn');
            }
        });
    }
    revealOnScroll();
});