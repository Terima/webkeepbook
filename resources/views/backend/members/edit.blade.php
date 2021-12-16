@extends('layouts.backend.backend_dashboard')
@section('title', 'Edit Members')
@section('dashboard_header', 'Edit Data Anggota')
@section('content')
<div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
        <form action="{{ route('update_members', $member->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="nama_anggota" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_anggota" name="name"
                    placeholder="Masukkan nama anggota" value="{{ $member->name }}" required>
            </div>
            <div class="mb-3">
                <label for="alamat_anggota" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat_anggota" name="address"
                    placeholder="Masukkan alamat anggota" value="{{ $member->address }}" required>
            </div>
            <div class="mb-3">
                <label for="email_anggota" class="form-label">Email</label>
                <input type="text" class="form-control" id="email_anggota" name="email"
                    placeholder="Masukkan alamat email anggota" value="{{ $member->email }}" required>
            </div>
            <div class="mb-3">
                <label for="password_anggota" class="form-label">Kata sandi</label>
                <input type="password" class="form-control" id="password_anggota" name="password"
                    placeholder="Masukkan kata sandi anggota" value="{{ $member->password }}" required>
            </div>
            <div class="mb-3">
                <label for="no_telepon_anggota" class="form-label">No telepon</label>
                <input type="text" class="form-control" id="no_telepon_anggota" name="phone_number"
                    placeholder="Masukkan no telepon anggota" value="{{ $member->phone_number }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan data</button>
        </form>
    </div>
</div>
@endsection
