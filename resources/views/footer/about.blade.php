@extends('layouts.halaman.footer')

@section('title')
    <title> About | Dewa Programming </title>
@endsection

@section('meta')
    <!-- Meta Sosmed --> 
    <meta property="og:type" content="article">
    <meta property="og:title" content="About Dewa Programming">
    <meta property="og:site_name" content="Dewa Programming">
    <meta property="og:url" content="http://dewaprogramming.com/about">
    <meta property="og:image" content="http://dewaprogramming.com/wa-thumb.png">
    <meta property="article:published_time" content="2020">
    <meta property="article:author" content="http://dewaprogramming.com/about">

    <meta name="description" content="About atau Tentang www.dewaprogramming.com">
@endsection

    @section('breadcrumb')
    <!-- Breadcrumb -->
    <ul class="breadcrumb">
        <li><a href="/"> <span style="color: black;" class="icon-home1"></span> Home </a></li>
        <li> About </li>
    </ul>
    @endsection

@section('konten')
    <!-- Konten -->
    <div class="container">
        <div class="Konten" style="background: #FFFFFF; padding: 20px;">
            <h1 style="font-weight: bold;"> About </h1> <br>
            <p>  
            www.dewaprogramming.com adalah situs yang berisi Tutorial Web Programming, Wallpaper, dan Informasi tentang teknologi digital atau Dunia TI.<br><br>
            Untuk Tutorial ada bahasa pemrograman seperti PHP, Javascript. Ada juga Tutorial Software seperti Notepad++, Visual Studio Code, FIGMA.
            <br>
            Kami juga menyediakan Wallpaper HD Gratis untuk PC & Mobile.
            </p> <hr>
            <p>  
            www.dewaprogramming.com is a site that contains Web Programming Tutorials, Wallpapers, and Information about digital technology or the IT World.<br><br>
            For Tutorials there are programming languages like PHP, Javascript. There are also Tutorial Software like Notepad ++, Visual Studio Code, FIGMA.
            <br>
            We also provide Free HD Wallpapers for PCs & Mobile.
            </p> <br><br><br><br><br><br>
        </div>
    </div>
    <!-- Akhir Konten -->
@endsection