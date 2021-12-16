@extends('layouts.backend.backend_dashboard')
@section('title', 'Books')
@section('dashboard_header', 'Daftar Buku')
@section('content')
<div class="row">
    <div class="col-lg col-md-6 col-sm-6 mb-4">
        <a href="{{ url(route('insert_books')) }}" class="btn btn-success p-1 mb-2">
            <i class="material-icons">add</i> Tambah Data
        </a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Halaman</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $key => $book)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{Str::of($book->description)->words(6)}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->pages}}</td>
                    <td>{{$book->pub_year}}</td>
                    <td>
                        <a href="{{route('edit_books', $book->id)}}" class="btn btn-info p-1 m-1">
                            <i class="material-icons">edit</i> Edit
                        </a>
                        <form action="{{ route('delete_books', $book->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger p-1 m-1" onclick="return confirm('Yakin Hapus?')">
                            <i class="material-icons">delete</i> Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
