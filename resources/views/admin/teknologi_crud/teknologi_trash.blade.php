<!-- Copyright 2020 By: Dewa -->
<!-- Instagram        : @dewaprogramming -- @741_dewa -- @dewasmkn1jakarta -->
<!-- Dibuat           : 05/05/2020 -->

<!--                                    *NOTE*
    COPY PASTE PUNYA ORANG LAIN TANPA IZIN ITU DOSA. IZIN TERLEBIH DAHULU. TERIMAKASIH  
-->



<!DOCTYPE html>
<html>
<head>
	<title> Teknologi Trash </title>

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('faviconDP/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('faviconDP/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('faviconDP/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('faviconDP/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('faviconDP/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	@include('sweetalert::alert')
	<div class="container">
 
		<div class="card mt-5">
			<div class="card-body">
				
				<a href="/segel/teknologi" class="btn btn-danger">Kembali</a> 
 
				<br/>
				<br/>
 
				<a href="/segel/teknologi/kembalikan_semua">Kembalikan Semua</a>
				|
				<a href="/segel/teknologi/hapus_permanen_semua">Hapus Permanen Semua</a>
				<br/>
				<br/>
 
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Judul</th>
							<th class="text-center" colspan="2" width="30%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($teknologi as $g)
						<tr>
							<td>{{ $g->judul }}</td>
							<td class="text-center"><a href="/segel/teknologi/kembalikan/{{ $g->id }}" class="btn btn-success btn-sm">Restore</a></td>	
							<td class="text-center"><a href="/segel/teknologi/hapus_permanen/{{ $g->id }}" class="btn btn-danger btn-sm">Deleted</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>