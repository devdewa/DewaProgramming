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
    @yield('title')
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/tutorial/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/tutorial/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/tutorial/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/tutorial/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon/tutorial/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    @yield('meta')

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/footer/footer.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('fonts/icon/icon.css') }}">
    
    <!-- CSS Responsive -->
    <link rel="stylesheet" href="{{ asset('css/footer/footer3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer/footer4.css') }}">

    <!-- Javascript -->
    <script src="{{ asset('js/jquery.js') }}"></script> 

</head>
<body>

    <!-- Tombol Scroll Atas -->
    <a class="to_top" title="Scroll Top"> <button class="TombolScrollAtas to_top"> <span class="icon-chevron-up"></span> </button> </a>

    <!-- Navigasi -->
    <nav>
        <div class="logonav">
            <a href="/">
                <img id="LogoNavigasi" src="{{ asset('gambar/LogoDPTutorial.png') }}" width="180px" alt="Logo">
            </a>
        </div>
            <ul> 
                <li> <a href="/"> Home </a> </li>
                    <li> <button> <span> Category <span class="icon-caret-down"></span> </span> </button> 
                        <div class="Dropdown">
                            <ul>
                                <li> <a href="/tutorial/html"> HTML </a> </li>
                                <li> <a href="/tutorial/css"> CSS </a> </li>
                                <li> <a href="/tutorial/javascript"> Javascript </a> </li>
                                <li> <a href="/tutorial/semua-tutorial"> Semua Tutorial </a> </li>
                            </ul> 
                        </div> 
                    </li> 
                <li> <a href="youtube"> Youtube </a> </li>
                <li> <a href="teknologi"> Seputar Teknologi Digital </a> </li>
                
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

        @yield('breadcrumb')

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