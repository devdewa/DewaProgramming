@extends('layouts.halaman.category')

@section('konten')
        <div class="container2">
            <svg viewBox="0 0 121 190" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M60.3348 189.896L11.2154 174.675L0.271088 37.4903H120.547L109.59 174.656L60.3348 189.896Z" fill="#264DE4"/>
            <path d="M100.209 165.927L109.573 48.7139H60.4177V178.229L100.209 165.927Z" fill="#2965F1"/>
            <path d="M25.3934 99.571L26.7436 116.393H60.4414V99.571H25.3934ZM22.681 65.5163L24.049 82.3385H60.4355V65.5163H22.6514H22.681ZM60.4355 143.268H60.3703L43.5984 138.205L42.5265 124.784H27.3833L29.4916 151.202L60.3348 160.791H60.4058L60.4355 143.268Z" fill="#EBEBEB"/>
            <path d="M28.5796 0.192894H46.8142V8.7165H36.2015V17.2401H46.8142V25.7637H28.5796V0.192894ZM50.492 0.192894H68.7267V7.60473H58.0902V9.08709H68.703V26.1343H50.4623V18.3519H61.0751V16.8695H50.4623V0.192894H50.492ZM72.4044 0.192894H90.6391V7.60473H79.973V9.08709H90.5858V26.1343H72.3452V18.3519H82.9579V16.8695H72.3452V0.192894H72.4044Z" fill="black"/>
            <path d="M95.3591 99.571L98.0774 65.5163H60.3348V82.3385H81.5543L80.1862 99.5445H60.3348V116.367H78.8774L77.1007 138.205L60.3348 143.281V160.785L91.2016 151.222L91.4267 148.377L94.9801 104.078L95.3472 99.5578L95.3591 99.571Z" fill="white"/>
            </svg>
        </div>
    </div>
    <!-- Akhir Laanding Page -->

        <!-- Breadcrumb -->
        <ul class="breadcrumb">
            <li><a href="/"> <span style="color: black;" class="icon-home1"></span> Home </a></li>
            <li> CSS </li>
        </ul>

    <!-- Konten -->
    <div class="container">
      <div class="Konten">
        
        @foreach ($css as $tutorial)    
                <div class="card">
                    <a href="{{route('tutorial.show', $tutorial->slug)}}"> 
                    <div class="KontenCard">
                        <img alt="Tutorial CSS" class="lazy" src="{{ asset('blank.jpg') }}" data-original="{{$tutorial->getPhoto()}}"> 
                    </a>     
                        <p> <a id="Tag" href="/tutorial/css"> CSS </a> </p> <br>
                        <a href="{{route('tutorial.show', $tutorial->slug)}}">
                            <p>{{ $tutorial->judul }}</p>
                        </a> 
                    </div>
                </div>
        @endforeach
        
        </div>
        
    </div>
    <!-- Akhir Konten -->
@endsection