@extends('layouts.admin-auth.admin')

@section('konten') 
        
    <!-- KONTEN -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard Teknologi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/segel/teknologi">Home</a></li>
                <li class="breadcrumb-item active">Teknologi</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            
            <!-- Main row -->
            <div class="row">
            @include('sweetalert::alert')
            <!-- Kiri -->
            <section class="col-lg-7 connectedSortable">
                <a href="/segel/teknologi/trash" class="btn btn-success mb-3"><i class="far fa-trash-alt"></i> Trash</a>

                <table class="table table-bordered table-hover">  
                    <thead class="thead-dark">
                        <tr>
                        <th width="10%">ID</th>
                        <th>Judul</th>
                        <th class="text-center">Option</th>
                        </tr>
                    </thead>
                    @foreach ($teknologi as $p) 
                    <tbody>
                        <tr>
                            <td class="table-light">{{$p->id}}</td>
                            <td class="table-light">
                                <a href="{{route('tech.edit', $p->id)}}" style="font-size: 15px; color: #2672b5">{{$p->judul}}</a><br>
                                <a style="font-size: 12px; opacity: .7; text-decoration: none;" target="_blank" href="{{route('tech.show', $p->slug)}}">View Blog</a>
                                <a style="font-size: 12px;  opacity: .7; text-decoration: none;" class="ml-2" href="/segel/teknologi/hapus/{{ $p->id }}" class="ml-2">Hapus</a>
                            </td>
                            <td class="text-center table-light" width="10%">@if ($p->isPublished == 0)
                                <a class="btn btn-sm btn-warning"  href="/segel/teknologi/publish/{{$p->id}}">Publish</a>
                                @else
                                <a class="btn btn-sm btn-primary" href="/segel/teknologi/publish/{{$p->id}}">Unpublish</a>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table> 

                <div class="float-left">
                    <span>Halaman {{$teknologi->currentPage()}} dari {{$teknologi->lastpage()}}</span>
                </div>
                <div class="float-right">
                    @if ($teknologi->currentPage() <= 1)

                    @else
                    <a class="btn btn-sm btn-danger" href="/segel/teknologi">First Page</a>
                    <a class="btn btn-sm btn-info" href="/segel/teknologi?page={{$teknologi->currentPage() - 1}}">&laquo; Back</a>
                    @endif
                    
                    @if ($teknologi->lastPage() <= 3)
                        
                    @else    
                    <a class="btn btn-sm btn-info" href="/segel/teknologi?page=2">2</a>
                    <a class="btn btn-sm btn-info" href="/segel/teknologi?page=3">3</a>
                    @endif

                    @if ($teknologi->lastPage() > 3)
                    <span style="font-size: 18px;line-height: 30px;">....... </span><a class="btn btn-sm btn-info" href="/segel/teknologi?page={{$teknologi->lastPage() - 1}}">{{$teknologi->lastPage() - 1}}</a>                
                    @endif

                    @if ($teknologi->currentPage() == $teknologi->lastPage())
                    
                    @else
                    <a class="btn btn-sm btn-info" href="/segel/teknologi?page={{$teknologi->currentPage() + 1}}">Next &raquo;</a>
                    <a class="btn btn-sm btn-danger" href="/segel/teknologi?page={{$teknologi->lastPage()}}">last page</a>
                    @endif
                </div>

            </section>
            <!-- Akhir Kiri -->

            <!-- Kanan -->
            <section class="col-lg-5 connectedSortable">


            </section>
            <!-- Akhir Kanan -->

            </div>
            <!-- /.row (main row) -->

        </div>
        <!-- /.container-fluid -->

        </section>
        <!-- /.content -->

    </div>
    <!-- AKHIR KONTEN -->
@endsection