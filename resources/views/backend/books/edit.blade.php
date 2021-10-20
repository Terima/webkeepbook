@extends('layouts.backend.backend_dashboard')
@section('title', 'Edit Books')
@section('dashboard_header', 'Edit Data Buku')
@section('content')
<div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
        <form action="{{ route('update_books', $book->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="judul_buku" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul_buku" name="title"
                    placeholder="Masukkan judul buku" value="{{ $book->title }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_buku" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_buku" name="description"
                    placeholder="Masukkan deskripsi buku" rows="3" required>{{ $book->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="penulis_buku" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis_buku" name="author"
                    placeholder="Masukkan nama penulis buku" value="{{ $book->author }}" required>
            </div>
            <div class="mb-3">
                <label for="halaman_buku" class="form-label">Jumlah halaman</label>
                <input type="number" class="form-control" id="halaman_buku" name="pages" maxlength="5"
                    oninput="this.value=this.value.slice(0,this.maxLength)" placeholder="Masukkan jumlah halaman"
                    value="{{ $book->pages }}" required>
            </div>
            <div class="mb-3">
                <label for="tahun_buku" class="form-label">Tahun terbit</label>
                <input type="number" class="form-control" id="tahun_buku" name="pub_year" maxlength="4"
                    oninput="this.value=this.value.slice(0,this.maxLength)" placeholder="Masukkan tahun penerbitan buku"
                    value="{{ $book->pub_year }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan data</button>
        </form>
    </div>
</div>
@endsection
