const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click', function(){
    nav.classList.toggle('slide')
});

const navfixed = document.querySelector('.menu-toggle input');
const navigasi = document.querySelector('nav');

navfixed.addEventListener('click', function(){
    navigasi.classList.toggle('navfixed')
});

const button = document.querySelector('nav ul button');
const dropdown = document.querySelector('nav ul li ul');

button.addEventListener('click', function(){
    dropdown.classList.toggle('Klik')
});

//ScrollAtas
$(document).ready(function() {
    $(".TombolScrollAtas").click(function() {
        $("html").animate({ scrollTop: 0 }, 500);
    });
});

//ScrollTagButton 
$(document).ready(function() {
    $('.ContainerTagButton a').click(function(e) {
        
        var targetHref = $(this).attr('href');
        
      $('html, body').animate({
          scrollTop: $(targetHref).offset().top - 250
      }, 500);
      
      e.preventDefault();
    });
  });