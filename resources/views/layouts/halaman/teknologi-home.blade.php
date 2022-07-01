<!-- Copyright 2020 By: Dewa Programming -->
<!-- Author/Pembuat   : Adityawarman Dewa Putra -->
<!-- Instagram        : @dewaprogramming -- @741_dewa -- @dewasmkn1jakarta -->
<!-- Dibuat           : 05/05/2020 -->

<!--                                    *NOTE*
    COPY PASTE PUNYA ORANG LAIN TANPA IZIN ITU DOSA. IZIN TERLEBIH DAHULU. TERIMAKASIH  
-->



<!DOCTYPE html>
<html lang="en" id="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dewa Teknologi </title>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/tutorial/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/tutorial/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/tutorial/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/tutorial/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon/tutorial/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta Sosmed --> 
    <meta property="og:type" content="article">
    <meta property="og:title" content="Informasi Seputar Teknologi Digital | Dewa Programming">
    <meta property="og:site_name" content="Dewa Programming">
    <meta property="og:url" content="http://dewaprogramming.com/teknologi">
    <meta property="og:image" content="http://dewaprogramming.com/wa-thumb.png">
    <meta property="article:published_time" content="2020">
    <meta property="article:author" content="http://dewaprogramming.com">
    <meta property="article:author" content="dewaprogramming.com">

    <meta name="description" content="Kumpulan Berbagai Informasi Seputar Teknologi Digital, Ada berbagai tips dan trik, dan berbagai macam jenis lainnya.">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('fonts/icon/Icon.css') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/teknologi/style.css') }}">

    <!-- CSS Responsive -->
    <link rel="stylesheet" href="{{ asset('css/teknologi/responsive3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/teknologi/responsive4.css') }}">

    <!-- Javascript -->
    <script src="{{ asset('js/jquery.js') }}"></script> 
    <script src="{{ asset('js/breaking-news.js') }}"></script> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ec6b83aaae8a8001a86c58f&product=inline-share-buttons&cms=website' async='async'></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ec6b83aaae8a8001a86c58f&product=sticky-share-buttons&cms=website' async='async'></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ec6b83aaae8a8001a86c58f&product=inline-reaction-buttons&cms=website' async='async'></script>
    <script src="{{ asset('js/LazyDewa.jquery.js') }}" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8">
    $(function() {
    $("img.lazy").lazyload({effect : "fadeIn"});
    });
    </script>  
</head>
<body>
        <!-- Tombol Scroll Atas -->
        <a class="to_top" title="Scroll Top"> <button class="TombolScrollAtas to_top"> <span class="icon-chevron-up"></span> </button> </a>

        <!-- Header -->
        <div class="Header">

            <!-- Searching -->
            <div class="Searching">

                <!-- Berita -->
                <p id="BreakingNews"> BREAKING NEWS </p>
        
                        <div id="ticker-roll" class="ticker">
                            
                            <ul> 
                                @foreach ($berita as $news)
                                    <li><a href="tech/{{$news->slug}}"> {{ Str::limit($news->judul, 40)}} </a></li> 
                                @endforeach
                            </ul>
                    
                        </div><!--/#ticker --> 
                        <script> 
                            $(function(){ 
                                $.simpleTicker($("#ticker-roll"),{
                                    speed : 1000,
                                    delay : 4000,
                                    effectType :'roll'                  
                                });
                            }); 
                        </script>
                        </a>
                <!-- Akhir Berita -->

                <div class="SocialMediaHeader">
                    <a href="https://www.instagram.com/all_dewa_works/" target="_blank"> <span class="icon-instagram"></span> </a>
                    <a href="https://twitter.com/adityawarman_P" target="_blank"> <span class="icon-twitter"></span> </a> 
                    <a href="https://web.facebook.com/profile.php?viewas=100000686899395&privacy_source=timeline_gear_menu&entry_point=action_bar" target="_blank"> <span class="icon-facebook-official"></span> </a>
                    <a href="https://www.youtube.com/channel/UC6ijSNRVfUNLyxyZNLcTFbA" target="_blank"> <span class="icon-youtube-play"></span> </a>
                    <a href="https://discord.gg/QmfnVpS" target="_blank"> <span class="icon-discord"></span> </a>
                </div>

                <form action="teknologi-cari" method="GET"> 
                    @csrf
                    <input type="search" name="search" autocomplete="off" placeholder="Search.." maxlength="50">
                    <button type="submit"> <span class="icon-search"></span> </button> 
                </form>
                
            </div>
            
        </div>
        <!-- Akhir Header -->

        <!-- Navigasi -->
        <nav class="Navigasi">
            <!-- Mode Malam -->
            <div class="ModeMalam">
                <input type="checkbox" class="checkbox" id="checkbox"> 
                <label for="checkbox" class="label"> 
                    <script> 
                        const checkbox = document.getElementById('checkbox');

                        checkbox.addEventListener('change', () => {
                            document.body.classList.toggle('light');
                        });
                    </script>
                <span class="icon-moon-o"></span>
                <span class="icon-sun"></span>
                <div class="ball"></div>
                </label>
            </div>
        <div class="logonav">
            <a href="/teknologi">
                <img id="LogoNavigasi" src="{{ asset('gambar/LogoDPTeknologi.png') }}" width="180px" alt="Logo">
            </a>
        </div>
            <ul> 
                <li> <a href="/teknologi"> Home </a> </li>
                    <li> <button><span>Category Tutorial <span class="icon-caret-down"></span></span></button> 
                        <div class="Dropdown">
                            <ul>
                                <li> <a href="/tutorial/html"> HTML </a> </li>
                                <li> <a href="/tutorial/css"> CSS </a> </li>
                                <li> <a href="/tutorial/javascript"> Javascript </a> </li>
                                <li> <a href="/tutorial/semua-tutorial"> Semua Tutorial </a> </li>
                            </ul> 
                        </div> 
                    </li> 
                <li> <a href="/youtube"> Youtube </a> </li>
                <li> <a href="/"> Tutorial </a> </li>
            </ul>   
        <div class="menu-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <script src="{{ asset('js/dewaNavigasi.js') }}"> </script>
    </nav>
    <!-- Akhir Navigasi -->

        <!-- Breadcrumb -->
        <ul class="breadcrumb">
            <li> <span class="icon-globe"></span> Seputar Teknologi Digital </li>
        </ul>

    @yield('konten')

    <!-- Footer -->
    <div class="Akhir">
        <div class="Footer">
            <div class="FooterKiri">
                <a href="https://www.instagram.com/all_dewa_works/" target="_blank"> <span class="icon-instagram"></span> </a>
                <a href="https://twitter.com/adityawarman_P" target="_blank"> <span class="icon-twitter"></span> </a> 
                <a href="https://discord.gg/QmfnVpS" target="_blank"> <span class="icon-discord"></span> </a> 
            </div>
            <div class="FooterKanan">    
                <a href="/about"> <p> About </p> </a> 
                <a href="/contact"> <p> Contact </p> </a> 
                <a href="/disclaimer"> <p> Disclaimer </p> </a>
                <a href="/privacy-policy"> <p> Privacy Policy </p> </a> 
                <a href="/terms-and-conditions"> <p> Terms & Conditions </p> </a> 
            </div>
        </div>
    <!-- Akhir Footer -->

    <!-- Penutup -->
        <div class="Penutup">
            <p><?php echo " Adityawarman Dewa Putra - &copy; 2020 - " . date("Y") ?></p>
        </div>
    </div>
    <!-- Akhir Penutup -->  
    
</body>
</html>
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