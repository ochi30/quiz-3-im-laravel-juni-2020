@extends('sbadmin-2.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Q N A</h2>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="width:400px">Judul Artikel</th>
                    <th style="width:150px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artikel as $key => $tanya)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $tanya->judul }}</td>
                    <td>
                        <a href="/artikel/{{ $tanya->id }}/edit" class="badge bg-warning">Edit</a>
                        <a href="/pertanyaan/delete/{{ $tanya->id }}" class="badge bg-danger">Hapus</a>
                        <a href="/artikel/{{ $tanya->id }}" class="badge bg-info">detail</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="ml-3">
        <a href="/artikel/create" class="btn btn-sm btn-info">Tulis Artikelmu</a>
        <a href="/" class="btn btn-sm btn-active">Halaman Utama</a>
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
@push('script')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush
@endsection

