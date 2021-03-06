@extends('layouts.backend.backend_dashboard')
@section('title', 'Dashboard')
@section('dashboard_header', 'Database Overview')
@section('content')
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Buku</span>
                            <h6 class="stats-small__value count my-3">{{$bookcount}}</h6>
                        </div>
                        {{-- <div class="stats-small__data">
                                <span
                                    class="stats-small__percentage stats-small__percentage--increase">4.7%</span>
                            </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Anggota</span>
                            <h6 class="stats-small__value count my-3">{{$membercount}}</h6>
                        </div>
                        {{-- <div class="stats-small__data">
                                <span
                                    class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                            </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Peminjaman</span>
                            <h6 class="stats-small__value count my-3">{{$recordcount}}</h6>
                        </div>
                        {{-- <div class="stats-small__data">
                                <span
                                    class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                            </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Small Stats Blocks -->
@endsection
