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
        
        <title>{{$tutorial->judul}}</title>

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
        <meta property="og:title" content="{{$tutorial->judul}}">
        <meta property="og:site_name" content="Dewa Programming">
        <meta property="og:url" content="http://dewaprogramming.com/tutorial/{{$tutorial->slug}}">
        <meta property="og:image" content="http://dewaprogramming.com/{{$tutorial->getPhoto()}}">
        <meta property="article:published_time" content="2020">
        <meta property="article:author" content="http://dewaprogramming.com/adityawarman-dewa-putra">

        <meta name="description" content="{{$tutorial->deskripsi}}">

        <!-- Icon -->
        <link rel="stylesheet" href="{{ asset('fonts/icon/Icon.css') }}">

        <!-- CSS -->
        <link href="{{ asset('css/tutorial/style.css') }}" rel="stylesheet">

        <!-- Responsive -->
        <link rel="stylesheet" href="{{ asset('css/tutorial/responsive3.css') }}"> 
        <link rel="stylesheet" href="{{ asset('css/tutorial/responsive4.css') }}"> 

        <!-- Javascript -->
        <script src="{{ asset('js/jquery.js')}}"></script>
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
        .JudulGambar {
            width: 100%;
        }

        #FotoJudulGambar {
            width: 100%;
        }

        .TutorialImage {
            width: 80%;
        }

        .IconLogo {
            width: 80px;
        }
        
        @media only screen and (max-width: 650px) {
            .IconLogo {
                width: 50px;
            }

            .TutorialImage {
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
                <li> <a href="/youtube"> Youtube </a> </li>
                <li> <a href="/teknologi"> Seputar Teknologi Digital </a> </li>
                
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
            <li><a href="/" style="color: black;"> <span class="icon-home1"></span> </a></li>
            <li><a href="/tutorial/{{$tutorial->category->slug}}"> {{$tutorial->category->category}} </a></li>
            <li> {{$tutorial->judul}} </li>
        </ul>

    <!-- Konten & Sidebar -->
    <div class="container">
        <!-- Konten -->
        <div class="konten">

            <b><a id="Tag" href="/tutorial/{{$tutorial->category->slug}}"> {{$tutorial->category->category}} </a></b><br>
            <h1> {{$tutorial->judul}} </h1> <hr> <br>
            <div class="JudulGambar"> <img id="FotoJudulGambar" class="lazy" src="{{ asset('blank.jpg') }}" data-original="{{$tutorial->getPhoto()}}" alt="Gambar konten"></div>
            <span>Ditulis Oleh: <a href="/adityawarman-dewa-putra">{{$tutorial->user->name}} Dewa Putra</a></span><br>
            {!! $tutorial->body !!}
            <br><br>
            <a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/"><img alt="Lisensi Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nd/4.0/80x15.png" /></a><a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/">Lisensi Creative Commons</a> <br>
        
            <div class="sharethis-inline-reaction-buttons"></div> <br>
            <div class="sharethis-inline-share-buttons" id="Avenir"></div> <br><br>

            <div class="ContainerCard">
                @if (isset($prev))
                <div class="card">
                    <a href="/tutorial/{{$prev->slug}}"> 
                    <div class="kontenCard">
                        <img alt="Tutorial {{$prev->category}}" class="lazy" src="{{ asset('blank.jpg') }}" data-original="{{$prev->getPhoto()}}"> 
                    </a>     
                        <p> <a id="Tag" href="{{$prev->slug_tag}}">{{$prev->category->category}}</a> </p> <br>
                        <a href="">
                            <p>{{$prev->judul}}</p>
                        </a> 
                    </div>
                </div>
                @endif
                @if (isset($next))
                <div class="card">
                    <a href="/tutorial/{{$next->slug}}"> 
                    <div class="kontenCard">
                        <img alt="Tutorial {{$next->category}}" class="lazy" src="{{ asset('blank.jpg') }}" data-original="{{$next->getPhoto()}}"> 
                    </a>     
                        <p> <a id="Tag" href="{{$next->slug_tag}}">{{$next->category->category}}</a> </p> <br>
                        <a href="">
                            <p>{{$next->judul}}</p>
                        </a> 
                    </div>
                </div>
                @endif
            </div>
                    
        </div>
        <!-- Akhir konten -->

        <!-- Sidebar -->
        <div class="Sidebar">

            <!-- HTML -->
            <h2> HTML </h2>
                @foreach ($html as $p)
                <a href="{{$p->slug}}"> <p> <span class="icon-caret-right"></span> &nbsp;{{$p->judul}} </p> </a> <hr>
                @endforeach
            <br><br>

            <!-- CSS -->
            <h2> CSS </h2>
                @foreach ($css as $p)
                <a href="{{$p->slug}}"> <p> <span class="icon-caret-right"></span> &nbsp;{{$p->judul}} </p> </a> <hr>
                @endforeach
            <br><br>

            <!-- Sidebar WAJIB -->  
            <div class="SidebarWAJIB">

                <!-- Semua Bahasa -->
                <div class="SemuaBahasa">
                    <a href="/tutorial/html"> <button id="HTML"> <span class="icon-folder1"></span> HTML </button> </a>
                    <a href="/tutorial/css"> <button id="CSS"> <span class="icon-folder1"></span> CSS </button> </a>
                    <a href="/tutorial/javascript"> <button id="Javascript"> <span class="icon-folder1"></span> Javascript </button> </a>
                    <a href="/tutorial/bootstrap"> <button id="Bootstrap"> <span class="icon-folder1"></span> Bootstrap </button> </a>
                    <a href="/tutorial/semua-tutorial"> <button id="Others"> <span class="icon-folder1"></span> Semua Tutorial </button> </a>
                </div> 

            </div>
            <!-- Akhir Sidebar WAJIB -->

        </div>
        <!-- Akhir Sidebar -->
    </div>
    <!-- Akhir konten & Sidebar -->

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