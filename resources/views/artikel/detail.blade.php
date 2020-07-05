@extends('sbadmin-2.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Judul Artikel : {{ $artikel->judul }}</h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <p>
            <h6>slug Artikel: {{ $artikel->slug}}</h6>
            <h6>tag artikel : {{ $artikel->tag}}</h6>
        </p>
        <p>
            <h6>isi : </h6>
            <h6>{{ $artikel->isi }}</h6>
        </p>
    </div>
    <div class="ml-3">
        <a href="/artikel/create" class="btn btn-sm btn-info">Tulis Artikelmu</a>
        <a href="/artikel" class="btn btn-sm btn-active">Artikel Lain</a>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
    </div>
</div>
@endsection