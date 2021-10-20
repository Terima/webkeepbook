@extends('layouts.backend.backend_dashboard')
@section('title', 'Insert Books')
@section('dashboard_header', 'Tambah Data Buku')
@section('content')
<div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
        <form action="{{ route('store_books') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="judul_buku" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul_buku" name="title"
                    placeholder="Masukkan judul buku" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_buku" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_buku" name="description"
                    placeholder="Masukkan deskripsi buku" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="penulis_buku" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis_buku" name="author"
                    placeholder="Masukkan nama penulis buku" required>
            </div>
            <div class="mb-3">
                <label for="halaman_buku" class="form-label">Jumlah halaman</label>
                <input type="number" class="form-control" id="halaman_buku" name="pages" maxlength="5"
                    oninput="this.value=this.value.slice(0,this.maxLength)" placeholder="Masukkan jumlah halaman"
                    required>
            </div>
            <div class="mb-3">
                <label for="tahun_buku" class="form-label">Tahun terbit</label>
                <input type="number" class="form-control" id="tahun_buku" name="pub_year" maxlength="4"
                    oninput="this.value=this.value.slice(0,this.maxLength)" placeholder="Masukkan tahun penerbitan buku"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah data</button>
        </form>
    </div>
</div>
@endsection
