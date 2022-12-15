@extends('back.layouts.master')
@section('title','Tüm Makaleler')
@section('content')
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold float-right text-primary"><strong>{{$pages->count()}}</strong> makale bulundu.
                                </h6>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Fotoğraf</th>
                                                <th>Başlık</th>
                                                
                                                 
                                                
                                                <th>Durum</th>
                                                <th>İşlemler</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pages as $page)
                                            <tr>
                                                <td>
                                                    <img src="{{$page->image}}" width="100">
                                                </td>
                                                <td>{{$page->title}}</td>
                                               
                                                
                                                
                                                <td>
                                                    <input class="switch" page-id="{{ $page->id }}" type="checkbox" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger" @if($page->status==1) checked @endif  data-toggle="toggle">
                                                </td>
                                                <td>
                                                    <a href="{{ route('page',$page->slug) }}" target="_blank" title="Görüntüle" class="btn btn-sm btn-success">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="" title="Düzenle" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-pen"></i>
                                                    </a>
                                                    <a href="" title="Sil" class="btn btn-sm btn-danger">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
@endsection
@section('css')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
$(function() {
    $('.switch').change(function() {
        id = $(this)[0].getAttribute('page-id');
        state = $(this).prop('checked');
        
        $.get("{{ route('admin.page.switch') }}", {id:id, state:state}, function(data, status){});
    })
  }) 
  </script>
@endsection