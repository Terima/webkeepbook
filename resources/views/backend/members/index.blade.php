@extends('layouts.backend.backend_dashboard')
@section('title', 'Members')
@section('dashboard_header', 'Member List')
@section('content')
<div class="row">
    <div class="col-lg col-md-6 col-sm-6 mb-4">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Nomor Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $key => $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->password}}</td>
                    <td>{{$data->phone_number}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
