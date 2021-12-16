@extends('layouts.frontend.frontend_dashboard')
@section('header')
@section('content')
<section class="bg-dark py-4">
    <div class="container py-3" style="margin: 50px auto">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card text-dark" style="border-radius: 1rem; background-color: #2dc997">
                    <div class="card-body px-5 py-3 text-center">

                        <div class="mb-md-2 mt-md-3 pb-4">

                            <h2 class="fw-bold mb-1 text-uppercase">Masuk</h2>
                            <p class="fw-bold text-white mb-3">Masukkan email dan kata sandi anda</p>

                            <div class="form-outline form-white mb-2">
                                <label class="form-label fw-bold" for="typeEmail">Email</label>
                                <input type="email" id="typeEmail" class="form-control" placeholder="Masukkan email..."/>
                            </div>

                            <div class="form-outline form-white mb-1">
                                <label class="form-label fw-bold" for="typePasswordX">Kata sandi</label>
                                <input type="password" id="typePasswordX" class="form-control" placeholder="Masukkan kata sandi..."/>
                            </div>

                            <p class="small mb-4 pb-lg-2"><a class="text-white fst-italic" href="#!">Lupa kata sandi?</a></p>

                            <button class="btn btn-dark btn-lg px-4 fw-bold" type="submit">Masuk</button>

                        </div>

                        <div>
                            <p class="mb-3 fst-italic">Belum punya akun? <a href="#!"
                                    class="text-white fw-bold">Mendaftar</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
