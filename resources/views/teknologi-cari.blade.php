@extends('layouts.halaman.teknologi-home')

@section('konten')
    <!-- Konten & Sidebar -->
    <div class="container">
        <!-- Konten -->
        <div class="Konten">

            <!-- Konten Terakhir dengan sidebar -->
            <div class="KontenTerakhirDanSidebar">

                <!-- Konten Terakhir -->
                <div class="KontenTerakhir">
                         
                    @foreach ($teknologi as $p)
                        <div class="KontenTerakhirCard">
                            <div class="GambarKontenTerakhir">
                                <a href="tech/{{$p->slug}}">
                                <img class="lazy" alt="Gambar" src="{{ asset('blank.jpg') }}" data-original="{{$p->getPhoto()}}">
                                </a>
                            </div>
                            <div class="TeksKontenTerakhir">
                                <a href="tech/{{$p->slug}}">
                                <h2>{{$p->judul}}</h2> 
                                </a>
                                <p id="Tanggal"><span class="icon-calendar-o"></span> {{$p->created_at}}</p>
                            </div> 
                        </div>
                    @endforeach

                    <!-- Pagination -->
                    <div>
                        <ul class="pagination">
                        @if ($teknologi->currentPage() <= 1)

                        @else
                        <li class="back">
                            <a href="/teknologi?page={{$teknologi->currentPage() - 1}}"><span>&laquo; Back</span></a>
                        </li>
                        @endif

                        @if ($teknologi->currentPage() <= 2)
                        @else
                        <li> <a href="/teknologi?page=1"><span>First</span></a> </li>
                        @endif
                                            
                        @if ($teknologi->lastPage() <= 1)                
                        @else    
                        <li> <a class="active" href="/teknologi?page=2"><span>{{$teknologi->currentPage()}}</span></a> </li>
                        @endif

                        @if ($teknologi->lastPage() == $teknologi->currentPage())
                        @else
                        <li> <a href="/teknologi?page={{$teknologi->lastPage()}}"><span>Last</span></a> </li>
                        @endif

                        @if ($teknologi->currentPage() == $teknologi->lastPage())
                                            
                        @else
                        <li class="next">
                            <a class="" href="/teknologi?page={{$teknologi->currentPage() + 1}}"><span>Next &raquo;</span></a>
                        </li>
                        @endif
                        </ul>
                    </div>
                    <!-- Akhir Pagination -->
                </div>
                <!-- Akhir Konten Terakhir -->

                <!-- Sidebar -->
                <div class="Sidebar">

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
            <!-- Akhir Konten Terakhir dengan sidebar -->

        </div> 
        <!-- Akhir Konten -->

        
    </div> 
    <!-- Akhir Konten & Sidebar -->
@endsection