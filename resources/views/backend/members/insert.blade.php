@extends('layouts.backend.backend_dashboard')
@section('title', 'Insert Members')
@section('dashboard_header', 'Tambah Data Anggota')
@section('content')
<div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
        <form action="{{ route('store_members') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_anggota" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_anggota" name="name"
                    placeholder="Masukkan nama anggota" required>
            </div>
            <div class="mb-3">
                <label for="alamat_anggota" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat_anggota" name="address"
                    placeholder="Masukkan alamat anggota" required>
            </div>
            <div class="mb-3">
                <label for="email_anggota" class="form-label">Email</label>
                <input type="text" class="form-control" id="email_anggota" name="email"
                    placeholder="Masukkan alamat email anggota" required>
            </div>
            <div class="mb-3">
                <label for="password_anggota" class="form-label">Kata sandi</label>
                <input type="password" class="form-control" id="password_anggota" name="password"
                    placeholder="Masukkan kata sandi anggota" required>
            </div>
            <div class="mb-3">
                <label for="no_telepon_anggota" class="form-label">No telepon</label>
                <input type="text" class="form-control" id="no_telepon_anggota" name="phone_number"
                    placeholder="Masukkan no telepon anggota" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah data</button>
        </form>
    </div>
</div>
@endsection
