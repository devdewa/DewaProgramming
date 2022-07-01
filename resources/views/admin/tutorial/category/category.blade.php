@extends('layouts.admin-auth.admin-front')

@section('konten')

    <!-- KONTEN -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Category</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/segel/tutorial">Home</a></li>
                <li class="breadcrumb-item active">Category</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main Content -->
        <section class="content">

            <div class="container-fluid">
                
                <!-- Main Row -->
                <div class="row">

                <section class="col-lg-12 connectedSortable">
                    @include('sweetalert::alert')
            
                        <!-- Modal Tambah -->
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#category">Tambah</button>

                        <div class="modal fade bd-example-modal-lg" id="category" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card-body">
                                        <form method="post" action="/segel/categroy/store">
                                
                                            {{ csrf_field() }}
                                
                                            <div class="form-group">
                                                <label>Category</label>
                                                <input type="text" name="category" class="form-control" placeholder="Category...">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success" value="Simpan"><i class="fas fa-save"></i> Save</button>
                                            </div>
                                
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                        <table class="table table-bordered table-hover table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Category</th>
                                    <th class="text-center">OPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category as $p)
                                <tr>
                                    <td class="table-light"><a href="/segel/category/edit/{{ $p->id }}">{{ $p->category }}</a></td>
                                    <td class="table-light text-center"><a href="/segel/category/hapus/{{ $p->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>           

                        <div class="d-flex align-items-center">
                            <span>Halaman {{$category->currentPage()}} dari {{$category->lastpage()}}</span>
                        </div>
                        <div class="ml-3">
                            @if ($category->currentPage() <= 1)

                            @else
                            <a class="btn btn-sm btn-danger" href="/segel/category">First Page</a>
                            <a class="btn btn-sm btn-info" href="/segel/category?page={{$category->currentPage() - 1}}">&laquo; Back</a>
                            @endif
                            
                            @if ($category->lastPage() <= 3)
                                
                            @else    
                            <a class="btn btn-sm btn-info" href="/segel/category?page=2">2</a>
                            <a class="btn btn-sm btn-info" href="/segel/category?page=3">3</a>
                            @endif

                            @if ($category->lastPage() > 3)
                            <span style="font-size: 18px;line-height: 30px;">....... </span><a class="btn btn-sm btn-info" href="/segel/category?page={{$category->lastPage() - 1}}">{{$category->lastPage() - 1}}</a>                
                            @endif

                            @if ($category->currentPage() == $category->lastPage())
                            
                            @else
                            <a class="btn btn-sm btn-info" href="/segel/category?page={{$category->currentPage() + 1}}">Next &raquo;</a>
                            <a class="btn btn-sm btn-danger" href="/segel/category?page={{$category->lastPage()}}">last page</a>
                            @endif
                        </div>
                    </section>

                </div>
                <!-- //Akhir Main Row -->

            </div>
            <!-- //Akhir container-fluid -->

        </section>
        <!-- //Akhir Main Content -->

    </div>
    <!-- AKHIR KONTEN -->
@endsection