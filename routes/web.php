<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowRecordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
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
Route::get('/dashboard', [DashboardController::class, 'counter'])->name('backend_dashboard');
Route::get('/books', [BookController::class, 'backend_index'])->name('backend_books');
Route::get('/members', [MemberController::class, 'backend_index'])->name('backend_members');
Route::get('/records', [BorrowRecordController::class, 'backend_index'])->name('backend_records');
