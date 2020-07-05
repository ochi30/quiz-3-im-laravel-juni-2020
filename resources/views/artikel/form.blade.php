@extends('sbadmin-2.master')

@section('content')
<div class="card shadow ml-3">
    <div class="card-header">
        <h3 class="m-0 font-weight-bold ">Tuliskan Artikel Anda</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/artikel" method="POST" id="myform" >
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Judul Artikel</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul Artikel">
            </div>
            <div class="form-group">
                <label>Isi Artikel</label>
                <textarea class="form-control" rows="5" name="isi"
                    placeholder="masukkan isi Artikel anda"></textarea>
            </div>
            <div class="form-group">
                <label>Judul Artikel huruf kecil spasi ganti dengan -</label>
                <input class="form-control" type="text" id="slug" name="slug" >
            </div>
            
            <div class="form-group">
                <label>Tag Artikel</label>
                <input type="text" class="form-control" id="tag" name="tag" placeholder="Masukkan tag artikel">
            </div>
            
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection