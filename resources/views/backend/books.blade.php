@extends('layouts.backend.backend_dashboard')
@section('title', 'Books')
@section('dashboard_header', 'Book List')
@section('content')
<div class="row">
    <div class="col-lg col-md-6 col-sm-6 mb-4">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Halaman</th>
                    <th scope="col">Tahun</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $key => $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->author}}</td>
                    <td>{{$data->pages}}</td>
                    <td>{{$data->pub_year}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
