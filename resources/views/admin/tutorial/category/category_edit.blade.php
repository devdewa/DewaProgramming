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
                <a href="/segel/category" class="btn btn-danger mb-3">&laquo; Kembali</a>
                <form method="post" action="/segel/category/update/{{ $category->id }}">
                    
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" name="category" class="form-control" placeholder="Category..." value=" {{ $category->category }}">

                        @if($errors->has('category'))
                            <div class="text-danger">
                                {{ $errors->first('category')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" name="slug" class="form-control" placeholder="Slug..." value=" {{ $category->slug }}">

                        @if($errors->has('slug'))
                            <div class="text-danger">
                                {{ $errors->first('slug')}}
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>

                    </form>
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