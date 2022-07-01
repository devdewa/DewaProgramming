<?php 
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics,brandingSettings&id=UC6ijSNRVfUNLyxyZNLcTFbA&key=AIzaSyB9o_r21UfuByPHq399kWx2MEf9I65g4bA');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);

$result = json_decode($result, true);

$NamaYT = $result['items']['0']['snippet']['title'];
$NamaDeskripsi = $result['items']['0']['snippet']['description'];

$Subscriber = $result['items']['0']['statistics']['subscriberCount'];
$JumlahVideo = $result['items']['0']['statistics']['videoCount'];
$JumlahViews = $result['items']['0']['statistics']['viewCount'];

?>

<!-- Copyright 2020 By: Dewa Programming -->
<!-- Author/Pembuat   : Adityawarman Dewa Putra -->
<!-- Instagram        : @dewaprogramming -- @741_dewa -- @dewasmkn1jakarta -->
<!-- Dibuat           : 05/05/2020 -->

<!--                                    *NOTE*
    COPY PASTE PUNYA ORANG LAIN TANPA IZIN ITU DOSA. IZIN TERLEBIH DAHULU. TERIMAKASIH  
-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Dewa Gaming </title>
        
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('faviconDG/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('faviconDG/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('faviconDG/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('faviconDG/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('faviconDG/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <meta name="description" content="Website OFFICIAL Youtube Channel Dewa Gaming">

        <!-- Icon -->
        <link rel="stylesheet" href="{{ asset('fonts/icon/Icon.css') }}">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/youtube/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/youtube/framework.css') }}">

        <!-- JS -->
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/youtube/framework.js') }}"></script>

        <!-- Responsive -->
        <link rel="stylesheet" href="{{ asset('css/youtube/mobile.css') }}">
        <link rel="stylesheet" href="{{ asset('css/youtube/tablet.css') }}">

    </head>
    <body>

    <!-- Loarder -->
    <div id="top"></div>
    <div id="Loader">
    <div class="container-load">
        <div class="loader">
        <div class="loader">
            <div class="loader">
            <div class="loader">
            <div class="loader">
                <div class="loader">
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Navigasi -->
    <div class="navbar">
        <nav class="nav-extended">
            <div class="nav-wrapper">

            <!-- Kiri -->
            <ul class="left">
                <li><a href="#" data-target="slide-out" class="sidenav-trigger"><span class="icon-align-left"></span></a></li>
            </ul>
            
            <!-- Kanan -->
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <ul id="dropdown1" class="dropdown-content">
                    <li class="close"><span class="icon-cross"></span></i>
                    <li><a href="#!">Video</a></li>
                    <li><a href="#!">Playlist</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">Profile</a></li>
                </ul>
                <li><a href="/"> Tutorial Programming </a></li>
                <li><a href="/teknologi"> Teknologi </a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Menu <span class="icon-caret-down"></span></a></li>
                <script> 
                    $(".dropdown-trigger").dropdown();
                </script>
             
            </ul>
            
            </div>
        </nav>
    </div>

    <!-- Profile -->
        <ul id="slide-out" id="Profile"  class="sidenav">
            <li><div class="user-view">
                <div class="background">
                <img src="" width="100%">
                </div>
                <a href="#user"><img class="circle" src="{{ asset('/FotoDefault/DGLogo.png') }}"></a>
            </div></li>
            <li><a href="#!">Videos = <?php echo $JumlahVideo; ?></a></li>
            <li><a href="#!">Views = <?php echo $JumlahViews; ?></a></li>
            <li><div class="divider"></div></li>
            <!-- Tombol Subscribe -->
            <script src="https://apis.google.com/js/platform.js"></script>
            <li><a class="btn-flat disabled center-align" href=""> <div class="g-ytsubscribe" data-channelid="UC6ijSNRVfUNLyxyZNLcTFbA" data-layout="default" data-count="default"></div></a></li>
        </ul>

        <script> 
            $(document).ready(function(){
            $('.sidenav').sidenav();
            }); 
        </script>

    <!-- Konten -->
    <div id="Konten" class="container">
        
        <!-- Player -->
        <div class="video-container">
            <div class="hero-img">
                <div class="caption" style="padding:0;">
                <iframe id="player_vid" class="video" src="https://www.youtube.com/embed/qmCI3oi8s34" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- 12 Video -->
        

  

        <div class="row">
        <div class="col s12">  
            <div id='videos'>
     
            </div>
      
        </div>            
        </div>  
    </div>
  
    <script src="{{ asset('js/youtube/allvideoYT.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/youtube/duabelasvideoYT.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/youtube/index.js') }}"></script>

    </body>
</html>
