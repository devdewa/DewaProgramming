<!-- Copyright 2020 By: Dewa Programming -->
<!-- Author/Pembuat   : Adityawarman Dewa Putra -->
<!-- Instagram        : @dewaprogramming -- @741_dewa -- @dewasmkn1jakarta -->
<!-- Dibuat           : 05/05/2020 -->

<!--                                    *NOTE*
    COPY PASTE PUNYA ORANG LAIN TANPA IZIN ITU DOSA. IZIN TERLEBIH DAHULU. TERIMAKASIH  
-->



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dewa Programming</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/tutorial/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/tutorial/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/tutorial/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('favicon/tutorial/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('favicon/tutorial/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- Meta Sosmed --> 
        <meta property="og:type" content="article">
        <meta property="og:title" content="Dewa Programming | Tutorial Bahasa Pemrograman Web">
        <meta property="og:site_name" content="Dewa Programming">
        <meta property="og:url" content="http://dewaprogramming.com">
        <meta property="og:image" content="http://dewaprogramming.com/wa-thumb.png">
        <meta property="article:published_time" content="2020">
        <meta property="article:author" content="http://dewaprogramming.com">
        <meta property="article:author" content="dewaprogramming.com">

        <meta name="description" content="www.dewaprogramming.com Adalah Situs yang Berisi 
        Kumpulan Tutorial Seperti Web Programming, Software, Database, dan masih banyak lagi.">

        <!-- Icon -->
        <link rel="stylesheet" href="{{ asset('fonts/icon/Icon.css') }}">

        <!-- CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Responsive -->
        <link rel="stylesheet" href="{{ asset('css/mobile-responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tablet-responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/desktop-responsive.css') }}">

        <!-- Javascript -->
        <script src="{{ asset('js/jquery.js')}}"></script>
        <script src="{{ asset('js/LazyDewa.jquery.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/typing.js')}}"></script>
        <script type="text/javascript" charset="utf-8">
        $(function() {
        $("img.lazy").lazyload({effect : "fadeIn"});
        });
        </script>

</head>
</body>

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

    <!-- Landing Page -->
    <div class="LandingPage">
        <div class="container1">
            <div class="LapisanContainer1">
                <h1 style="display: none;"> Dewa Programming </h1>
                <b id="PLandingAtas"> Tutorial Web Programming </b> <br>
                <b style="margin: 10px 0px 0px 2px;"> <span id="typed" class="typed"></span></b> <br><br>
                <script> 
                    new Typed('#typed',{
                    strings : ['HTML','CSS','Javascript','Bootstrap'],
                    typeSpeed : 100,
                    backSpeed : 100,
                    delaySpeed : 2000,
                    loop : true
                });
                </script>
                <b id="PLandingBawah"> Mau Tips dan Trik <br> Agar Kamu Hebat dalam <br>  membuat sebuah Website?<br> </b> <br>
                <a href="tech/cara-membuat-website-gratis-dengan-coding"> <button> Go! </button> </a>
            </div>
        </div>

        <div class="container2">
            <svg width="901" height="787" viewBox="0 0 901 787" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Coding">
            <g clip-path="url(#clip0)">
            <g id="Daun">
            <path id="Vector" d="M130.75 276C130.75 276 204.04 349.29 162.67 458C121.3 566.71 233.58 747.64 233.58 747.64C233.58 747.64 232.38 747.46 230.15 747.07C79.63 720.5 4.84002 548.35 88.58 420.5C119.66 372.91 145.2 317.14 130.75 276Z" fill="url(#paint0_linear)"/>
            <path id="Vector_2" d="M0.209961 572.42C0.209961 572.42 83.84 559.1 91.46 634.05C99.08 709 252.28 719.39 252.28 719.39C252.28 719.39 251.28 720.07 249.41 721.3C122.92 804.3 2.00996 774.19 20.24 663.94C27.01 622.95 26.45 581.78 0.209961 572.42Z" fill="url(#paint1_linear)"/>
            </g>
            <path id="Leher" d="M449.02 233.29C449.02 233.29 467.02 327.36 449.02 352.73C431.02 378.1 504.02 388.14 504.02 388.14L579.58 360.66L590.15 293.01C590.15 293.01 544.15 267.11 553.68 214.79L449.02 233.29Z" fill="#FEBA93"/>
            <path id="Tangan Kanan" d="M672.04 550.39C672.04 550.39 676.8 571 650.9 574.7C635.607 576.95 620.055 576.764 604.82 574.15L599.11 522.38H659.36L672.04 550.39Z" fill="#FEBA93"/>
            <path id="Tangan Kiri" d="M214.7 524.01C214.7 524.01 203.26 570.5 229.16 574.7C255.06 578.9 350.16 578.93 350.16 578.93V523.93L307.1 533.13L266.68 494.37L214.7 524.01Z" fill="#FEBA93"/>
            <path id="Baju" d="M454.58 261.57L353.37 282.97C353.37 282.97 314.79 284.56 289.95 335.82C265.11 387.08 211.19 533.5 211.19 533.5C211.19 533.5 257.19 486.99 311.08 536.67L347.02 471.67L339.09 574.7H617.58V526.08C617.58 526.08 675.71 557.26 671.49 574.7C671.49 574.7 721.24 446.52 710.49 388.27C707.254 370.262 705.269 352.052 704.55 333.77C703.915 318.713 698.636 304.221 689.436 292.284C680.237 280.347 667.569 271.55 653.17 267.1C647.93 265.49 642.17 263.98 635.77 262.63C576.05 249.95 560.77 262.63 560.77 262.63C560.77 262.63 549.2 300.27 549.41 317.33C549.67 339.26 518.23 353.8 518.23 353.8C518.23 353.8 471.72 342.7 469.61 333.72C467.5 324.74 450.86 272.14 454.58 261.57Z" fill="url(#paint2_linear)"/>
            <g id="Laptop">
            <path id="Vector_3" d="M338.82 553.3H644.29C651.018 553.3 657.471 555.973 662.229 560.731C666.987 565.489 669.66 571.941 669.66 578.67H313.46C313.46 571.943 316.132 565.492 320.887 560.734C325.643 555.977 332.093 553.303 338.82 553.3Z" fill="#3A3B40"/>
            <path id="Vector_4" d="M369.9 378.89H613.22C618.342 378.89 623.413 379.899 628.145 381.859C632.876 383.819 637.176 386.691 640.797 390.313C644.419 393.934 647.291 398.234 649.251 402.965C651.211 407.697 652.22 412.768 652.22 417.89V559.11H330.9V417.89C330.9 407.547 335.009 397.627 342.323 390.313C349.637 382.999 359.557 378.89 369.9 378.89Z" fill="#3A3B40"/>
            <path id="LingkaranLaptop" d="M491.29 495.96C501.8 495.96 510.32 487.44 510.32 476.93C510.32 466.42 501.8 457.9 491.29 457.9C480.78 457.9 472.26 466.42 472.26 476.93C472.26 487.44 480.78 495.96 491.29 495.96Z" fill="white"/>
            </g>
            <g id="Headset">
            <path id="Vector_5" d="M589.5 99.33C579.61 78.77 558.07 53.91 511.64 51.92V51.86H511.08L494.63 52.64V52.72C448.51 54.84 427.07 79.61 417.21 100.1C410.643 113.99 407.157 129.136 406.99 144.5L412.67 144.36L418.35 144.23C418.595 130.552 421.741 117.082 427.58 104.71C440.1 78.99 463.14 65.32 496.05 64.05L510.6 63.24C543.53 64.5 566.58 78.19 579.09 103.9C584.939 116.276 588.092 129.754 588.34 143.44L594.02 143.57L599.7 143.71C599.537 128.355 596.057 113.216 589.5 99.33Z" fill="#464646"/>
            <path id="Vector_6" d="M409.02 185.77H416.32V144.38H409.02V185.77Z" fill="#6A5C99"/>
            <path id="Vector_7" d="M597.66 143.57H590.36V184.96H597.66V143.57Z" fill="#6A5C99"/>
            <path id="Vector_8" d="M580.62 170.35C587.293 170.35 593.692 173.001 598.411 177.719C603.129 182.438 605.78 188.837 605.78 195.51V197.13C605.78 203.803 603.129 210.202 598.411 214.921C593.692 219.639 587.293 222.29 580.62 222.29V170.35Z" fill="#464646"/>
            <path id="Vector_9" d="M587.11 173.6C587.11 170.463 584.567 167.92 581.43 167.92C578.293 167.92 575.75 170.463 575.75 173.6V219.05C575.75 222.187 578.293 224.73 581.43 224.73C584.567 224.73 587.11 222.187 587.11 219.05V173.6Z" fill="#6A5C99"/>
            <path id="Vector_10" d="M426.06 223.1C419.387 223.1 412.988 220.449 408.269 215.731C403.551 211.012 400.9 204.613 400.9 197.94V196.32C400.9 193.016 401.551 189.744 402.815 186.692C404.08 183.639 405.933 180.865 408.269 178.529C410.606 176.193 413.379 174.34 416.432 173.075C419.484 171.811 422.756 171.16 426.06 171.16V223.1Z" fill="#464646"/>
            <path id="Vector_11" d="M419.57 219.85C419.57 222.987 422.113 225.53 425.25 225.53C428.387 225.53 430.93 222.987 430.93 219.85V174.4C430.93 171.263 428.387 168.72 425.25 168.72C422.113 168.72 419.57 171.263 419.57 174.4V219.85Z" fill="#6A5C99"/>
            </g>
            <g id="Meja">
            <path id="Vector_12" d="M848.99 579H74.28V787H848.99V579Z" fill="#D6D6E3"/>
            <path id="Vector_13" opacity="0.1" d="M848.99 593H74.28V620H848.99V593Z" fill="black"/>
            <path id="Vector_14" d="M900.94 576H22.3101V603H900.94V576Z" fill="#D6D6E3"/>
            </g>
            <g id="Kepala">
            <path id="Kupluk" d="M503.71 57.57C523.752 57.57 542.974 65.5318 557.146 79.7039C571.318 93.8761 579.28 113.098 579.28 133.14V165.38H428.14V133.14C428.14 113.098 436.102 93.8761 450.274 79.7039C464.446 65.5318 483.668 57.57 503.71 57.57Z" fill="#DC3838"/>
            <path id="Vector_15" d="M504.24 235.14C551.814 235.14 590.38 208.64 590.38 175.95C590.38 143.26 551.814 116.76 504.24 116.76C456.666 116.76 418.1 143.26 418.1 175.95C418.1 208.64 456.666 235.14 504.24 235.14Z" fill="#DC3838"/>
            <path id="Vector_16" d="M575.85 203.17C575.768 222.029 568.278 240.1 554.994 253.487C541.711 266.873 523.698 274.504 504.841 274.732C485.983 274.96 467.791 267.768 454.188 254.707C440.584 241.646 432.659 223.761 432.12 204.91C432.12 204.33 432.12 203.75 432.12 203.17C432.117 189.712 435.891 176.523 443.014 165.104C450.137 153.686 460.322 144.496 472.41 138.58C474.563 137.527 476.777 136.58 479.05 135.74C490.874 131.393 503.627 130.208 516.05 132.3C531.971 135.011 546.513 143.009 557.329 155.002C568.145 166.996 574.603 182.285 575.66 198.4C575.787 199.98 575.85 201.57 575.85 203.17Z" fill="#FEBA93"/>
            <path id="Vector_17" d="M478.94 135.8L479.04 135.74C476.767 136.58 474.553 137.527 472.4 138.58C460.312 144.496 450.127 153.686 443.004 165.104C435.881 176.523 432.107 189.712 432.11 203.17C432.11 203.75 432.11 204.33 432.11 204.91C434.345 204.85 436.542 204.322 438.56 203.36C456.08 195.18 466.56 170.16 470.72 152.71C472.22 146.5 473.63 139.43 478.94 135.8Z" fill="black"/>
            <path id="Vector_18" d="M533.95 137.82C528.261 135.207 522.253 133.354 516.08 132.31C521.142 133.475 525.663 136.315 528.91 140.37C530.501 142.534 531.821 144.885 532.84 147.37C523.275 143.188 512.915 141.133 502.478 141.349C492.04 141.565 481.774 144.046 472.39 148.62C476.9 158.51 490.89 163.9 500.23 167.51C510.457 171.457 520.79 175.067 531.23 178.34L521.99 170.84L542.86 174.16C543.085 170.007 542.591 165.845 541.4 161.86C545.4 165.08 550.7 166.16 555.04 168.86C563.17 173.99 566.56 183.86 570.99 192.41C572.16 194.67 573.54 196.98 575.65 198.41C574.797 185.492 570.472 173.044 563.133 162.38C555.793 151.716 545.711 143.231 533.95 137.82Z" fill="black"/>
            <path id="Vector_19" d="M423.91 189.69C423.91 189.69 497.91 97.69 583.52 189.69L576.12 169.08C576.12 169.08 535.95 110.42 507.42 123.08C478.89 135.74 450.87 144.75 450.87 144.75L423.91 189.69Z" fill="#DC3838"/>
            </g>
            </g>
            </g>
            <defs>
            <linearGradient id="paint0_linear" x1="143.638" y1="276" x2="143.638" y2="747.64" gradientUnits="userSpaceOnUse">
            <stop stop-color="#5200FF"/>
            <stop offset="1" stop-color="#5200FF" stop-opacity="0.47"/>
            </linearGradient>
            <linearGradient id="paint1_linear" x1="126.245" y1="571.504" x2="126.245" y2="768.754" gradientUnits="userSpaceOnUse">
            <stop stop-color="#5200FF"/>
            <stop offset="1" stop-color="#5200FF" stop-opacity="0.47"/>
            </linearGradient>
            <linearGradient id="paint2_linear" x1="461.601" y1="256.994" x2="461.601" y2="574.7" gradientUnits="userSpaceOnUse">
            <stop stop-color="#5200FF"/>
            <stop offset="1" stop-color="#001AFF" stop-opacity="0.65"/>
            </linearGradient>
            <clipPath id="clip0">
            <rect width="900.94" height="787" fill="white"/>
            </clipPath>
            </defs>
            </svg>
        </div>
    </div>
    <!-- Akhir Laanding Page -->

        <!-- Breadcrumb -->
        <ul class="breadcrumb">
            <li> <span class="icon-home1"></span> Home </li>
        </ul>

    <!-- Konten -->
    <div class="container">
      <div class="Konten">

        @foreach ($tutorials as $tutorial)
        <a href="{{route('tutorial.show', $tutorial->slug)}}">
            <div class="card">
                <a href="{{route('tutorial.show', $tutorial->slug)}}"> 
                    <div class="KontenCard">
                        <img class="lazy" alt="Gambar" src="{{ asset('blank.jpg') }}" 
                        data-original="{{$tutorial->getPhoto()}}"> 
                    </a>     
                        <p> <a id="Tag" href="/tutorial/{{$tutorial->category->slug}}">{{$tutorial->category->category}}</a> </p><br>
                        <a href="{{route('tutorial.show', $tutorial->slug)}}">
                        <h1>{{$tutorial->judul}}</h1>
                    </a> 
                </div>
            </div>
        </a>
        @endforeach

        </div>
        <!-- Pagination -->
        <div>
            <ul class="pagination">
            @if ($tutorials->currentPage() <= 1)

            @else
            <li class="back">
                <a href="/?page={{$tutorials->currentPage() - 1}}"><span>&laquo; Back</span></a>
            </li>
            @endif

            @if ($tutorials->currentPage() <= 2)
            @else
            <li> <a href="/?page=1"><span>First</span></a> </li>
            @endif
                                
            @if ($tutorials->lastPage() <= 1)                
            @else    
            <li> <a class="active" href="/?page=2"><span>{{$tutorials->currentPage()}}</span></a> </li>
            @endif

            @if ($tutorials->lastPage() == $tutorials->currentPage())
            @else
            <li> <a href="/?page={{$tutorials->lastPage()}}"><span>Last</span></a> </li>
            @endif

            @if ($tutorials->currentPage() == $tutorials->lastPage())
                                
            @else
            <li class="next">
                <a class="" href="/?page={{$tutorials->currentPage() + 1}}"><span>Next &raquo;</span></a>
            </li>
            @endif
            </ul>
        </div>
        <!-- Akhir Pagination -->
        
        <a id="TutorLainA" href="/tutorial/semua-tutorial" target="_blank"> <button id="TutorLain"> Semua Tutorial </button> </a>

    </div>
    <!-- Akhir Konten -->
    
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