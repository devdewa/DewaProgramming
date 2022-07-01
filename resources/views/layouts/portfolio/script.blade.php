<!-- Slider Projects -->
<script> 
    $('.slider-projects').slick({
        dots: true,
        arrow: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        centerMode: true,
        infinite: false,
        responsive: [
        {
          breakpoint: 768,
          settings: {
            dots: true,
            arrows: true,
            centerMode: true,
            slidesToShow: 1,
            autoplay: false,
            autoplaySpeed: 5000,
          }
        },
        {
          breakpoint: 650,
          settings: {
            arrows: false,
            centerMode: true,
            slidesToShow: 1,
            autoplay: false,
            autoplaySpeed: 5000,
          }
        }
      ]
    });
</script>

<!-- Album -->
<script type="text/javascript">
$(document).ready(function(){
  $('.venobox').venobox({
    numeratio  : true,                          
    infinigall : false,
    share      : ['facebook', 'twitter', 'linkedin', 'pinterest', 'download'],
    spinner    : 'wave',
  }); 
});
</script>
    
<!-- Scroll Top -->
<script type="text/javascript">
$(function(){
    $('.to_top').hide().on('click', function(){
        $('body,html').animate({scrollTop : 0}, 800);
    });
    $(window).on('scroll', function(){
        if($(this).scrollTop() > 50){
            $('.to_top').fadeIn().show();
        }else{
            $('.to_top').fadeOut();
        }
    });
});
</script>

<!-- Scroll Header, Navbar, dll -->
<script type="text/javascript">
  ScrollTrigger.create({
    start: 'top -850',
    end: 99999,
    toggleClass: {className: 'cd-header--scrolled', targets: '.cd-header'}
  });
  ScrollTrigger.create({
    start: 'top -80',
    end: 99999,
    toggleClass: {className: 'hamburger', targets: '.navbar-dark .navbar-toggler span'}
  });
</script>

<!-- Scroll Link Navigasi === a href === -->
<script type="text/javascript">
$("#nav-home").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#home").offset().top
    }, 1500);
});
$("#nav-about").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#about").offset().top -200
    }, 1500);
});
$("#nav-projects").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#projects").offset().top -200
    }, 1500);
});
$("#nav-expertise").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#expertise").offset().top -200
    }, 1500);
});
$("#nav-contact").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#contact").offset().top -200
    }, 1500);
});
</script>

<!-- Scroll Top -->
<script> 
  (function($) { "use strict";
    $(document).ready(function(){"use strict";
      
      var progressPath = document.querySelector('.progress-wrap path');
      var pathLength = progressPath.getTotalLength();
      progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
      progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
      progressPath.style.strokeDashoffset = pathLength;
      progressPath.getBoundingClientRect();
      progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';		
      var updateProgress = function () {
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = pathLength - (scroll * pathLength / height);
        progressPath.style.strokeDashoffset = progress;
      }
      updateProgress();
      $(window).scroll(updateProgress);	
      var offset = 50;
      var duration = 550;
      jQuery(window).on('scroll', function() {
        if (jQuery(this).scrollTop() > offset) {
          jQuery('.progress-wrap').addClass('active-progress');
        } else {
          jQuery('.progress-wrap').removeClass('active-progress');
        }
      });				
      jQuery('.progress-wrap').on('click', function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
      })
    });
  })(jQuery);
</script>

<!-- Navigasi -->
<script>
  (function($) { "use strict";  
    var app = function () {
      var body = undefined;
      var menu = undefined;
      var menuItems = undefined;
      var init = function init() {
        body = document.querySelector('body');
        menu = document.querySelector('.menu-icon');
        menuItems = document.querySelectorAll('.nav__list-item');
        applyListeners();
      };
      var applyListeners = function applyListeners() {
        menu.addEventListener('click', function () {
          return toggleClass(body, 'nav-active');
        });
      };
      var toggleClass = function toggleClass(element, stringClass) {
        if (element.classList.contains(stringClass)) element.classList.remove(stringClass);else element.classList.add(stringClass);
      };
      init();
    }(); 
  })(jQuery); 
</script>

<!-- Nav Close Trigger -->
<script>
  $('.nav li a').on('click', function(){
    $("body").removeClass("nav-active");
  });
</script>

<!-- Scroll Trigger -->
<script>
  AOS.init();
</script>