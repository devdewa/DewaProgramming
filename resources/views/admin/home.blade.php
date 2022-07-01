@extends('layouts.admin-auth.admin')

@section('konten')
        
    <!-- KONTEN -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard Tutorial</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/segel/tutorial">Home</a></li>
                <li class="breadcrumb-item active">Tutorial</li>
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
                <a href="/segel/tutorial/trash" class="btn btn-success mb-3"><i class="far fa-trash-alt"></i> Trash</a>

                <table class="table table-bordered table-hover">  
                    <thead class="thead-dark">
                        <tr>
                        <th width="10%">ID</th>
                        <th>Judul</th>
                        <th class="text-center">Option</th>
                        </tr>
                    </thead>
                    @foreach ($tutorials as $tutorial) 
                    <tbody>
                        <tr>
                            <td class="table-light">{{$tutorial->id}}</td>
                            <td class="table-light">
                                <a href="{{route('tutorial.edit', $tutorial->id)}}" style="font-size: 15px; color: #2672b5">{{$tutorial->judul}}</a><br>
                                <a style="font-size: 12px; opacity: .7; text-decoration: none;" target="_blank" href="{{route('tutorial.show', $tutorial->slug)}}">View Blog</a>
                                <a style="font-size: 12px;  opacity: .7; text-decoration: none;" class="ml-2" href="/segel/tutorial/hapus/{{ $tutorial->id }}" class="ml-2">Hapus</a>
                            </td>
                            <td class="text-center table-light" width="10%">
                                @if ($tutorial->isPublished == 0)
                                <a class="btn btn-sm btn-warning"  href="/segel/tutorial/publish/{{$tutorial->id}}">Publish</a>
                                @else
                                <a class="btn btn-sm btn-primary" href="/segel/tutorial/publish/{{$tutorial->id}}">Unpublish</a>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table> 

                <div class="float-left">
                    <span>Halaman {{$tutorials->currentPage()}} dari {{$tutorials->lastpage()}}</span>
                </div>
                <div class="float-right">
                    @if ($tutorials->currentPage() <= 1)

                    @else
                    <a class="btn btn-sm btn-danger" href="/segel/tutorial">First Page</a>
                    <a class="btn btn-sm btn-info" href="/segel/tutorial?page={{$tutorials->currentPage() - 1}}">&laquo; Back</a>
                    @endif
                    
                    @if ($tutorials->lastPage() <= 3)
                        
                    @else    
                    <a class="btn btn-sm btn-info" href="/segel/tutorial?page=2">2</a>
                    <a class="btn btn-sm btn-info" href="/segel/tutorial?page=3">3</a>
                    @endif

                    @if ($tutorials->lastPage() > 3)
                    <span style="font-size: 18px;line-height: 30px;">....... </span><a class="btn btn-sm btn-info" href="/segel/tutorial?page={{$tutorials->lastPage() - 1}}">{{$tutorials->lastPage() - 1}}</a>                
                    @endif

                    @if ($tutorials->currentPage() == $tutorials->lastPage())
                    
                    @else
                    <a class="btn btn-sm btn-info" href="/segel/tutorial?page={{$tutorials->currentPage() + 1}}">Next &raquo;</a>
                    <a class="btn btn-sm btn-danger" href="/segel/tutorial?page={{$tutorials->lastPage()}}">last page</a>
                    @endif
                </div>

            </section>
            <!-- Akhir Kiri -->

            <!-- Kanan -->
            <section class="col-lg-5 connectedSortable">

            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">
                    List Category
                </a>
                <a href="/segel/tutorial/?search=HTML" class="list-group-item list-group-item-action">HTML</a>
                <a href="/segel/tutorial/?search=CSS" class="list-group-item list-group-item-action">CSS</a>
            </div>

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