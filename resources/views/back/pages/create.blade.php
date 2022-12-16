@extends('back.layouts.master')
@section('title','Sayfa Oluştur')
@section('content')
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold mx-auto text-primary" style="width: 200px;">Sayfa Oluştur</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>
                                                {{$error}}
 trashed                                           </li> 
                                            @endforeach
                                        </ul>
                                        
                                    </div>
                                        
                                    @endif
                                    <form method="post" action="{{ route('admin.page.post') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                        <div class="col-12 form-group">
                                            <label for="">Sayfa Başlığı</label>
                                            <input type="text" name="title" class="form-control" required>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Sayfa Resmi</label>
                                            <input type="file" name="image" class="form-control" required>
                                        </div>
                                       
                                            <div class="form-group">
                                                <label for="">İçerik</label>
                                                <textarea name="content" id="editor" class="form-control" placeholder="İçerik giriniz.."></textarea>
                                            </div>
                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Sayfayı Oluştur</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#editor').summernote(
            {'height':300}
        );
    });
</script>
@endsection
