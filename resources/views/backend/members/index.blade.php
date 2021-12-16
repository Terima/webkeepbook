@extends('layouts.backend.backend_dashboard')
@section('title', 'Members')
@section('dashboard_header', 'Daftar Anggota')
@section('content')
<div class="row">
    <div class="col-lg col-md-6 col-sm-6 mb-4">
        <a href="{{ url(route('insert_members')) }}" class="btn btn-success p-1 mb-2">
            <i class="material-icons">add</i> Tambah Data
        </a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $key => $member)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$member->name}}</td>
                    <td>{{Str::of($member->address)->words(3)}}</td>
                    <td>{{Str::of($member->email)->limit(10, '***')}}</td>
                    <td>{{Str::of($member->phone_number)->limit(6, '***')}}</td>
                    <td>
                        <a href="{{route('edit_members', $member->id)}}" class="btn btn-info p-1 m-1">
                            <i class="material-icons">edit</i> Edit
                        </a>
                        <form action="{{ route('delete_members', $member->id) }}" method="post">
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
