@extends('back.layouts.master')
@section('title','Silinen Makaleler')
@section('content')
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold float-right text-primary"><strong>{{$articles->count()}}</strong> silinen makale bulundu.
                                <a href="{{ route('admin.makaleler.index') }}" class="btn btn-primary btn-sm"> Var Olan Makaleler</a>
                                </h6>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Fotoğraf</th>
                                                <th>Başlık</th>
                                                <th>Kategori</th>                   
                                                <th>Hit</th>
                                                <th>Oluşturulma Tarihi</th>

                                                <th>İşlemler</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($articles as $article)
                                            <tr>
                                                <td>
                                                    <img src="{{$article->image}}" width="100">
                                                </td>
                                                <td>{{$article->title}}</td>
                                                <td>{{$article->getCategory->name}}</td>
                                                <td>{{$article->hit}}</td>
                                                <td>{{$article->created_at->diffForHumans()}}</td>

                                                <td>
                                                    <a href="{{ route('admin.recover.article',$article->id) }}" title="Geri Yükle" class="btn btn-sm btn-primary">
                                                        <i class="fa fa-recycle"></i>
                                                    </a>
                                                    <a href="{{ route('admin.harddelete',$article->id) }}" title="Sil" class="btn btn-sm btn-danger">
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
