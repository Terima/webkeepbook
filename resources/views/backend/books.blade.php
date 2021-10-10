@extends('layouts.backend.backend_dashboard')
@section('title', 'Books')
@section('dashboard_header', 'Daftar Buku')
@section('content')
<div class="row">
    <div class="col-lg col-md-6 col-sm-6 mb-4">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Halaman</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $key => $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->author}}</td>
                    <td>{{$data->pages}}</td>
                    <td>{{$data->pub_year}}</td>
                    <td>
                        <a href="#" class="btn btn-success p-1 m-1">
                            <i class="material-icons">add</i> Tambah
                        </a>
                        <a href="#" class="btn btn-info p-1 m-1">
                            <i class="material-icons">edit</i> Edit
                        </a>
                        <a href="#" class="btn btn-danger p-1 m-1">
                            <i class="material-icons">delete</i> Hapus
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
