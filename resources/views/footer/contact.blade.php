@extends('layouts.halaman.footer')

@section('title')
    <title> Contact | Dewa Programming </title>
@endsection

@section('meta')
    <!-- Meta Sosmed --> 
    <meta property="og:type" content="article">
    <meta property="og:title" content="Contact Dewa Programming">
    <meta property="og:site_name" content="Dewa Programming">
    <meta property="og:url" content="http://dewaprogramming.com/contact">
    <meta property="og:image" content="http://dewaprogramming.com/wa-thumb.png">
    <meta property="article:published_time" content="2020">
    <meta property="article:author" content="http://dewaprogramming.com/contact">

    <meta name="description" content="Contact atau Tentang www.dewaprogramming.com">
@endsection

    @section('breadcrumb')
    <!-- Breadcrumb -->
    <ul class="breadcrumb">
        <li><a href="/"> <span style="color: black;" class="icon-home1"></span> Home </a></li>
        <li> Contact </li>
    </ul>
    @endsection

@section('konten')
    <!-- Konten -->
    <div class="container">
        <div class="Konten" style="background: #FFFFFF; padding: 20px;">
            <h1 style="font-weight: bold;"> Contact </h1> 
            <p style="margin-top: 20px;">
            <b> Hubungi kami melalui:</b><br><br>  
            Instagram: @dewaprogramming & @dewasmkn1jakarta <br><br>
            Twitter: @adityawarman_P <br><br> 
            Facebook: Adityawarman <br><br>
            Medium: Dewa Programming <br><br>
            Number: +62 85280146477 
            </p> <br><br>
            <a href="https://web.facebook.com/profile.php?viewas=100000686899395&privacy_source=timeline_gear_menu&entry_point=action_bar" target="_blank"><img width="50px" src="{{asset('gif/facebook.gif')}}"></a>
            <a href="https://twitter.com/adityawarman_P" target="_blank"><img width="50px" src="{{asset('gif/twitter.gif')}}"></a>
            <br><br><br><br>
        </div>
    </div>
    <!-- Akhir Konten -->
@endsection