@extends('layouts.admin-auth.admin')

@section('konten')

    <!-- KONTEN -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Postingan Baru Teknologi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/segel/teknologi">Home</a></li>
                <li class="breadcrumb-item active">Postingan Baru Teknologi</li>
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
            
                <div class="card-body">
                    <form action="{{route('tech.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">                
                        <div class="form-group">
                        <label for="judul">Judul Postingan</label>
                        <input type="text" name="judul" id="judul" class="form-control" aria-describedby="post" require autofocus>
                        <small id="post" class="text-muted">e.g. Cara install xampp</small>
                        </div>

                        <div class="form-group">
                        <label for="">Gambar Untuk Posingan (Opsional)</label>
                        <input type="file" class="form-control-file" name="photo" aria-describedby="fileHelpId" require>
                        <small id="fileHelpId" class="form-text text-muted">Masukkan gambar yang menarik perhatian</small>
                        </div>

                        <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" name="category" id="category" class="form-control" aria-describedby="post" value="Teknologi" require>
                        </div>

                        <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control" aria-describedby="post" require>
                        </div>
                
                    <label for="">Isi Postingan</label>
                    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                    <textarea name="body" cols="80" rows="50" class="form-control my-editor"></textarea><br>
                    <script>
                    var editor_config = {
                        path_absolute : "/",
                        selector: "textarea.my-editor",
                        plugins: [
                        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                        "searchreplace wordcount visualblocks visualchars code fullscreen",
                        "insertdatetime media nonbreaking save table contextmenu directionality",
                        "emoticons template paste textcolor colorpicker textpattern"
                        ],
                        image_class_list: [
                            {title: 'None', value: ''},
                            {title: 'Gambar', value: 'Gambar'},
                            {title: 'Manusia-Hewan', value: 'Manusia-Hewan'},
                            {title: 'IconLogo', value: 'IconLogo'}
                        ],
                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                        relative_urls: false,
                        file_browser_callback : function(field_name, url, type, win) {
                        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                        if (type == 'image') {
                            cmsURL = cmsURL + "&type=Images";
                        } else {
                            cmsURL = cmsURL + "&type=Files";
                        }

                        tinyMCE.activeEditor.windowManager.open({
                            file : cmsURL,
                            title : 'Filemanager',
                            width : x * 0.8,
                            height : y * 0.8,
                            resizable : "yes",
                            close_previous : "no"
                        });
                        }
                    };

                    tinymce.init(editor_config);
                    </script>
                    
                    <button class="btn btn-info">Simpan</button>
                    <button class="btn btn-warning" name="publish">Publish</button>
                    </form>
                </div>

            </div>
            <!-- /.row (main row) -->

        </div>
        <!-- /.container-fluid -->

        </section>
        <!-- /.content -->

    </div>
    <!-- AKHIR KONTEN -->
@endsection