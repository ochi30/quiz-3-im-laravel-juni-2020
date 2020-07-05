@extends('sbadmin-2.master')
@section('content')
<div class="card card-warning ml-3">
    <div class="card-header">
        <h3 class="card-title">Edit Artikel Anda</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/artikel/{{ $artikel->id }}/edit" method="POST">
        @csrf
        <input type="text" hidden id="id" name="id" value="{{ $artikel->id }}">
        <div class="card-body">
            <div class="form-group">
                <label>Judul Artikel</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $artikel->judul }}">
            </div>
            <div class="form-group">
                <label>Isi artikel</label>
                <input class="form-control" rows="3" name="isi" value="{{$artikel->isi}}">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button class="btn btn-warning">Simpan Perubahan</button>
        </div>
    </form>
</div>
@endsection