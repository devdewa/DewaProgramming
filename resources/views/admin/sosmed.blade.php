@extends('layouts.admin-auth.admin')

@section('konten')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v8.0&appId=686831761864326&autoLogAppEvents=1" nonce="V9Sw1EYB"></script>

    <!-- KONTEN -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Sosial Media</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/segel/tutorial">Home</a></li>
                <li class="breadcrumb-item active">Sosial Media</li>
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

            <!-- Kiri -->
            <section class="col-lg-7 connectedSortable">


                

            </section>
            <!-- Akhir Kiri -->

            <!-- Kanan -->
            <section class="col-lg-5 connectedSortable">
                <div class="fb-page" 
                    data-href="https://www.facebook.com/DewaGamingYT"
                    data-width="380" 
                    data-hide-cover="false"
                    data-show-facepile="false">
                </div>
                
                <div class="fb-page mt-4" 
                    data-href="https://www.facebook.com/dewaprogramming"
                    data-width="380" 
                    data-hide-cover="false"
                    data-show-facepile="false">
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