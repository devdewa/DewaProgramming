<!-- Copyright 2020 By: Dewa Programming -->
<!-- Author/Pembuat   : Adityawarman Dewa Putra -->
<!-- Instagram        : @dewaprogramming -- @741_dewa -- @dewasmkn1jakarta -->
<!-- Dibuat           : 05/05/2020 -->

<!--                                    *NOTE*
    COPY PASTE PUNYA ORANG LAIN TANPA IZIN ITU DOSA. IZIN TERLEBIH DAHULU. TERIMAKASIH  
-->



<!DOCTYPE html>
<html id="home">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Adityawarman Dewa Putra</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/tutorial/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/tutorial/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/tutorial/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('favicon/tutorial/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('favicon/tutorial/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- Meta Social Media --> 
        <meta property="og:type" content="article">
        <meta property="og:title" content="Adityawarman Dewa Putra | Portfolio">
        <meta property="og:site_name" content="Dewa Programming">
        <meta property="og:url" content="http://dewaprogramming.com/adityawarman-dewa-putra">
        <meta property="og:image" content="http://dewaprogramming.com/wa-thumb.png">
        <meta property="article:published_time" content="2020">
        <meta property="article:author" content="http://dewaprogramming.com">
        <meta property="article:author" content="dewaprogramming.com">

        <meta name="description" content="Portfolio Adityawarman Dewa Putra">

        <!-- Icon -->
        <link rel="stylesheet" href="{{ asset('fonts/icon/icon.css') }}">

        <!-- CSS -->
        <link href="{{ asset('css/portfolio/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/portfolio/venobox.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
        <link href="{{ asset('css/framework/aos.css') }}" rel="stylesheet">

        <!-- Responsive -->
        <link rel="stylesheet" href="{{ asset('css/portfolio/mobile-responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/portfolio/tablet-responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/portfolio/desktop-responsive.css') }}">

        <!-- Javascript -->
        <script src="{{ asset('js/jquery.js')}}"></script>
        <script src="{{ asset('js/app.js')}}"></script>
        <script src="{{ asset('js/typing.js')}}"></script>
        <script src="{{ asset('js/portfolio/slick.js')}}"></script>
        <script src="{{ asset('js/portfolio/gsap.js')}}"></script>
        <script src="{{ asset('js/portfolio/venobox.js')}}"></script>
        <script src="{{ asset('js/portfolio/skill-bar.js')}}"></script>
        <script src="{{ asset('js/portfolio/simpleLoadMore.js')}}"></script>
        <script src="{{ asset('js/portfolio/aos.js')}}"></script>
</head>
</body>

<!-- Navigasi -->
<header class="navbar fixed-top cd-header">
  <div class="container">
		<div class="header-wrapper">
      <a class="logo" href="#" class="hover-target"><img id="LogoNavigasi" src="{{ asset('gambar/portfolio/Logo.png') }}" alt="Dewa"></a>
      <div class="nav-but-wrap">
        <div class="menu-icon hover-target">
          <span class="menu-icon__line menu-icon__line-left"></span>
          <span class="menu-icon__line"></span>
          <span class="menu-icon__line menu-icon__line-right"></span>
        </div>					
      </div>					
    </div>		
  </div>		
</header>
<div class="nav">
		<div class="nav__content">
			<ul class="nav__list">
				<li class="nav__list-item active-nav"><a href="#home" id="nav-home" class="hover-target">Home</a></li>
        <li class="nav__list-item"><a href="#about" id="nav-about" class="hover-target">About</a></li>
				<li class="nav__list-item"><a href="#projects" id="nav-projects" class="hover-target">Projects</a></li>
        <li class="nav__list-item"><a href="#expertise" id="nav-expertise" class="hover-target">Expertise</a></li>
				<li class="nav__list-item"><a href="#contact" id="nav-contact" class="hover-target">Contact</a></li>
			</ul>
		</div>
</div>		

<!-- Home -->
<div class="hero" id="hero">
  <div class="container d-sm-flex">
    <div class="col-sm-12">
      <div class="nama_deskripsi d-flex align-items-center">
        <h1>Adityawarman Dewa Putra<p><span id="typed" class="typed"></span></p></h1>
        <script> 
          new Typed('#typed',{
            strings : ['Web Developer','Web Designer','Programming'],
            typeSpeed : 100,
            backSpeed : 100,
            delaySpeed : 2000,
            loop : true
          });
        </script></h1>
      </div>
    </div>
  </div>
</div>

<!-- About -->
<div class="container" id="about" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
  <div class="row">
    <div class="col-sm-8">
      <h2 class="mb-4 about-judul"> ABOUT </h2>
      <p class="about-text1">
        My name Adityawarman Dewa Putra <br>
        I am from Indonesia, 17 years old, live in Jakarta, and now a student at SMKN 1 JAKARTA
      </p>
      <p class="about-text2">
        I am very interested in the world of Digital Technology. At first I was interested because when I was 
        in grade 6 I was able to reinstall Windows myself without being taught (self-taught) by browsing and Youtube.
      </p>
      <p class="about-text3">
        Go to go world Programming or Coding since 14 years, where at that time a lot of 
        phishing on social media used the PHP language, and knowing Mark Zuckerberg.

        Now I am a student, I am still learning about programming. Always growing and giving my best as much as possible, until I graduated in school and pension in the world of work.
      </p>
    </div>
    <div class="col-sm-4">
      <a href="{{ asset('gambar/portfolio/cv.pdf') }}" download="CV Adityawarman Dewa Putra"><button>Download CV</button></a>
    </div>
  </div>
</div>

<!-- Projects -->
<div id="projects">
  <div class="container">
      <div class="judul">
        <h2> PROJECTS </h2>
      </div>
      <div class="slider-projects">
        <div><a class="venobox" data-gall="gallery1" href="{{ asset('gambar/portfolio/projects/project1.png') }}">
        <img src="{{ asset('gambar/portfolio/projects/bg-project1.jpg') }}"></a></div>
        <div><a class="venobox" data-gall="gallery1" href="{{ asset('gambar/portfolio/projects/project2.png') }}">
        <img src="{{ asset('gambar/portfolio/projects/bg-project2.jpg') }}"></a></div>
        <div><a class="venobox" data-gall="gallery1" href="{{ asset('gambar/portfolio/projects/project3.png') }}">
        <img src="{{ asset('gambar/portfolio/projects/bg-project3.jpg') }}"></a></div>
        <div><img src="{{ asset('gambar/ComingSoon.jpg') }}"></div>
      </div>
  </div>
</div>

<!-- Expertise --> 
<div class="container d-flex justify-content-center" id="expertise">
    <div class="col-md-12">
      <div class="judul">
          <h2> EXPERTISE </h2>
      </div>
      <p class="w-100 text-center">I've spent time improving my skills in website development.<br>And now I'm quite confident in building apps using these tools:</p>
      <div class="d-flex justify-content-center">
        <a href="https://tailwindcss.com/" target="_blank" title="Tailwind CSS"><img src="{{ asset('gambar/portfolio/tailwindcss.svg') }}" alt="Logo Tailwind CSS"></a>
        <a href="https://g.co/kgs/VTAVq1" target="_blank" title="CSS"><img src="{{ asset('gambar/portfolio/css.svg') }}" alt="Logo CSS"></a>
        <a href="https://getbootstrap.com/" target="_blank" title="Bootstrap"><img src="{{ asset('gambar/portfolio/bootstrap.svg') }}" alt="Logo Bootstrap"></a>
      </div>
      <div class="d-flex justify-content-center">
        <a href="https://getuikit.com/" target="_blank" title="UIkit"><img src="{{ asset('gambar/portfolio/uikit.svg') }}" alt="Logo UIkit"></a>
        <a href="https://bulma.io/" target="_blank" title="Bulma"><img src="{{ asset('gambar/portfolio/bulma.svg') }}" alt="Logo Bulma"></a>
      </div>
      <div class="d-flex justify-content-center">
        <a href="https://www.javascript.com/" target="_blank" title="Javascript"><img src="{{ asset('gambar/portfolio/javascript.svg') }}" alt="Logo Javascript"></a>
        <a href="https://jquery.com/" target="_blank" title="Jquery"><img src="{{ asset('gambar/portfolio/jquery.svg') }}" alt="Logo Jquery"></a>
        <a href="https://www.php.net/" target="_blank" title="PHP"><img src="{{ asset('gambar/portfolio/php.svg') }}" alt="Logo PHP"></a>
        <a href="https://laravel.com/" target="_blank" title="Laravel"><img src="{{ asset('gambar/portfolio/laravel.svg') }}" alt="Logo Laravel"></a>
      </div>
    </div>
</div>

<!-- Contact -->
<div class="mt-5" id="contact">
  <h2 class="text-center mb-5"> CONTACT US</h2>
  <div class="container social-media">
      <ul class="">
        <a href="https://www.instagram.com/all_dewa_works/" target="_blank"><li><span class="icon-instagram"></span></li></a>
        <a href="https://twitter.com/adityawarman_P" target="_blank"><li><span class="icon-twitter"></span></li></a>
        <a href="https://discord.gg/QmfnVpS" target="_blank"><li><span class="icon-discord"></span></li></a>
      </ul>
  </div>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 200 28" preserveAspectRatio="none" shape-rendering="auto">
      <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
      </defs>
      <g class="parallax">
        <use xlink:href="#gentle-wave" x="100" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="100" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="100" y="7" fill="#fff" />
      </g>
    </svg>
</div>

<!-- Footer -->
<div class="container" id="footer">
  <div class="row">
    <div class="col-md-8 col-sm-12">
      <p><?php echo " Adityawarman Dewa Putra - &copy; 2020 - " . date("Y") ?></p>
    </div>
    <div class="col-md-4 col-sm-12">
      <p>Thank you for visit my website <img src="{{ asset('gambar/portfolio/heart.gif') }}" alt="Heart"> </p>
    </div>
  </div>
</div>

<!-- Tombol Scroll Atas -->
<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		</svg>
</div>
    
</body>
</html>
@extends('layouts.portfolio.script')