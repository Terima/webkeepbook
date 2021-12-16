@extends('layouts.backend.backend_dashboard')
@section('title', 'Members')
@section('dashboard_header', 'Member List')
@section('content')
<div class="row">
    <div class="col-lg col-md-6 col-sm-6 mb-4">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $key => $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{Str::of($data->address)->words(3)}}</td>
                    <td>{{Str::of($data->email)->limit(10, '***')}}</td>
                    <td>{{Str::of($data->phone_number)->limit(6, '***')}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
