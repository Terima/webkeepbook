@extends('layouts.backend.backend_dashboard')
@section('title', 'Records')
@section('dashboard_header', 'Borrowing Records')
@section('content')
<div class="row">
    <div class="col-lg col-md-6 col-sm-6 mb-4">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Member</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Pengembalian</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($borrowrecords as $key => $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->member->name}}</td>
                    <td>{{$data->book->name}}</td>
                    <td>{{$data->borrow_date}}</td>
                    <td>{{$data->return_date}}</td>
                    <td>{{$data->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
