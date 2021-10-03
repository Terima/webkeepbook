<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//FrontEnd View
Route::get('/', function () {return view('frontend.dashboard');})->name('frontend_dashboard');

// BackEnd View
Route::get('/dashboard', function() {return view('backend.dashboard');})->name('backend_dashboard');
Route::get('/books', [BookController::class, 'backend_index'])->name('backend_books');
Route::get('/members', function () {return view('backend.members');})->name('backend_members');
Route::get('/records', function () {return view('backend.records');})->name('backend_records');
