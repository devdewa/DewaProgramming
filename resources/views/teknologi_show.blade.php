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
        
        <title>{{$teknologi->judul}}</title>

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
        <meta property="og:title" content="{{$teknologi->judul}}">
        <meta property="og:site_name" content="Dewa Programming">
        <meta property="og:url" content="http://dewaprogramming.com/tech/{{$teknologi->slug}}">
        <meta property="og:image" content="http://dewaprogramming.com/{{$teknologi->getPhoto()}}">
        <meta property="article:published_time" content="2020">
        <meta property="article:author" content="http://dewaprogramming.com/adityawarman-dewa-putra">

        <meta name="description" content="{{$teknologi->deskripsi}}">

        <!-- Icon -->
        <link rel="stylesheet" href="{{ asset('fonts/icon/Icon.css') }}">

        <!-- CSS -->
        <link href="{{ asset('css/teknologi/show/style.css') }}" rel="stylesheet">

        <!-- Responsive -->
        <link rel="stylesheet" href="{{ asset('css/teknologi/show/responsive3.css') }}"> 
        <link rel="stylesheet" href="{{ asset('css/teknologi/show/responsive4.css') }}"> 

        <!-- Javascript -->
        <script src="{{ asset('js/jquery.js')}}"></script>
        <script src="{{ asset('js/breaking-news.js') }}"></script> 
        <script src="{{ asset('js/LazyDewa.jquery.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/prettify.js') }}"></script>
        <script type="text/javascript" charset="utf-8">
        $(function() {
        $("img.lazy").lazyload({effect : "fadeIn"});
        });
        </script>
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ec6b83aaae8a8001a86c58f&product=inline-share-buttons&cms=website' async='async'></script>
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ec6b83aaae8a8001a86c58f&product=sticky-share-buttons&cms=website' async='async'></script>
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ec6b83aaae8a8001a86c58f&product=inline-reaction-buttons&cms=website' async='async'></script>

        <style type="text/css"> 
        .TeknologiImage {
            width: 80%;
        }

        .IconLogo {
            width: 80px;
        }
        
        @media only screen and (max-width: 650px) {
            .IconLogo {
                width: 50px;
            }

            .TeknologiImage {
                width: 100%;
            }
            
            table {
                background: #FFFFFF;
            }

            th {
                background: #DDD;
                padding: 5px;
                font-size: 15px;
            }

            td {
                background: #FFFFFF;
                padding: 10px 0px;
                font-size: 15px;
            }
        }
        </style>
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
                            <li><a href="{{$news->slug}}"> {{ Str::limit($news->judul, 40)}} </a></li> 
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

                <form action="../teknologi-cari" method="GET"> 
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
            <li><a href="/teknologi"><span class="icon-globe"></span> {{$teknologi->category}} </a></li>
            <li> {{$teknologi->judul}} </li>
        </ul>

    <!-- Konten & Sidebar -->
    <div class="container">
        <!-- Konten -->
        <div class="Konten">
            
            <div class="JudulGambar"><img id="FotoJudulGambar" class="lazy" src="{{ asset('blank.jpg') }}" data-original="{{$teknologi->getPhoto()}}" alt="Gambar Konten"></div>
            <span><a class="category" href="/{{$teknologi->slug_tag}}">{{$teknologi->category}}</a><span class="tanggal">Dibuat: {{$teknologi->created_at}}</span></span>
            <h1 class="judul">{{$teknologi->judul}}</h1>
            <span class="pembuat"><a class="nama" href="/adityawarman-dewa-putra"><span class="icon-user-solid-circle"></span>&nbsp;{{$teknologi->user->name}}</a></span><br>
            {!! $teknologi->body !!}
            <br><br>
            <a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/"><img alt="Lisensi Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nd/4.0/80x15.png" /></a><a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/">Lisensi Creative Commons</a> <br>
        
            <div class="sharethis-inline-reaction-buttons"></div> <br>
            <div class="sharethis-inline-share-buttons" id="Avenir"></div> <br><br>
                    
        </div>
        <!-- Akhir Konten -->

        <!-- Sidebar -->
        <div class="Sidebar">
            
            <img width="100%" src="{{ asset('gambar/ComingSoon.jpg') }}">
            <img width="100%" src="{{ asset('gambar/ComingSoon.jpg') }}">
            <img width="100%" src="{{ asset('gambar/ComingSoon.jpg') }}">

            <!-- Tutorial Programming -->
            <h2> Tutorial Programming </h2>
            <div class="garis"></div>
                @foreach ($tutorial as $p)
                <a href="{{$p->slug}}"> <p> <span class="icon-caret-right"></span> &nbsp;{{ Str::limit($p->judul, 30)}}</p></a>
                @endforeach
                <br>

            <!-- Lainnya -->
            <h2> Lainnya </h2>
            <div class="garis"></div>
                @foreach ($lainnya as $p)
                <a href="{{$p->slug}}"> <p> <span class="icon-caret-right"></span> &nbsp;{{ Str::limit($p->judul, 30)}}</p></a>
                @endforeach
                <br>

            <!-- Sidebar WAJIB -->  
            <div class="SidebarWAJIB">
                <form action="teknologi-cari" method="GET"> 
                    @csrf
                    <input id="fokus" type="search" name="search" autocomplete="off" placeholder="Search.." maxlength="50">
                    <button id="searching" type="submit"> <span class="icon-search"></span> </button> 
                </form>
                <div class="widget">
                    <img src="{{ asset('gambar/Dewa.jpg') }}">
                    <p><a target="blank" href="/adityawarman-dewa-putra"> Adityawarman Dewa Putra </a></p>
                    <div class="sosmed">
                        <a href="https://www.instagram.com/all_dewa_works/" target="_blank"> <span class="icon-instagram"></span> </a>
                        <a href="https://twitter.com/adityawarman_P" target="_blank"> <span class="icon-twitter"></span> </a> 
                        <a href="https://web.facebook.com/profile.php?viewas=100000686899395&privacy_source=timeline_gear_menu&entry_point=action_bar" target="_blank"> <span class="icon-facebook-official"></span> </a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Akhir Sidebar -->
    </div>
    <!-- Akhir Konten & Sidebar -->

    <!-- Sebelum Footer -->
    <div class="SebelumFooter">

    <div id="disqus_thread"></div>
        <script>
        (function() {
        var d = document, s = d.createElement('script');
        s.src = 'https://dewaprogramming.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>

    </div>
    <!-- Akhir Sebelum Footer -->    

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

<script id="dsq-count-scr" src="//tutuu.disqus.com/count.js" async></script>

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