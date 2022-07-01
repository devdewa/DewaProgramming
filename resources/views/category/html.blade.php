@extends('layouts.halaman.category')

@section('konten')
        <div class="container2">
            <svg viewBox="0 0 100 157" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M99.6848 31.0442L90.6592 144.008L50.0917 156.582L9.63661 144.008L0.622894 31.0442H99.6848Z" fill="#E44D26"/>
            <path d="M50.1509 146.973L82.9306 136.822L90.6296 40.2825H50.1509V146.973Z" fill="#F16529"/>
            <path d="M32.6091 67.9974H50.1509V54.14H19.0589L19.355 57.8591L22.405 96.0433H50.1568V82.1858H33.7462L32.6091 67.9974ZM35.4281 102.972H22.9913L24.7266 124.731L50.0976 132.633H50.1568V118.173H50.1035L36.2928 114.004L35.4281 102.972Z" fill="#EBEBEB"/>
            <path d="M9.84387 0.338013H16.1452V7.29323H21.9075V0.338013H28.2089V21.4088H21.9075V14.3543H16.1452V21.4088H9.84387V0.338013ZM36.4941 7.32631H30.9449V0.338013H48.3446V7.32631H42.7954V21.4088H36.5V7.32631H36.4941ZM51.1103 0.338013H57.684L61.7289 7.74323L65.7679 0.338013H72.3417V21.4088H66.064V10.966L61.7289 18.4573H61.6223L57.2813 10.966V21.4088H51.1103V0.338013ZM75.4745 0.338013H81.7758V14.4403H90.6592V21.4022H75.4923V0.338013H75.4745Z" fill="black"/>
            <path d="M50.1094 96.0433H65.377L63.9379 114.017L50.1094 118.186V132.633L75.5337 124.758L75.7173 122.415L78.631 85.9314L78.9331 82.2123H50.1094V96.0698V96.0433ZM50.1094 67.9644V67.9974H80.0643L80.313 64.8805L80.9052 57.8525L81.2014 54.1333H50.1094V67.9577V67.9644Z" fill="white"/>
            </svg>
        </div>
    </div>
    <!-- Akhir Laanding Page -->

        <!-- Breadcrumb -->
        <ul class="breadcrumb">
            <li><a href="/"> <span style="color: black;" class="icon-home1"></span> Home </a></li>
            <li> HTML </li>
        </ul>

    <!-- Konten -->
    <div class="container">
      <div class="Konten">
        
        @foreach ($html as $tutorial)    
                <div class="card">
                    <a href="{{route('tutorial.show', $tutorial->slug)}}"> 
                    <div class="KontenCard">
                        <img alt="Tutorial HTML" class="lazy" src="{{ asset('blank.jpg') }}" data-original="{{$tutorial->getPhoto()}}"> 
                    </a>     
                        <p> <a id="Tag" href="/tutorial/html"> HTML </a> </p> <br>
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