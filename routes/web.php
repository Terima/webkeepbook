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

// FrontEnd View
Route::get('/', function () {return view('frontend.dashboard');})->name('frontend_dashboard');
Route::get('/login', function () {return view('frontend.login');})->name('frontend_login');

// BackEnd View
Route::get('/dashboard', [DashboardController::class, 'counter'])->name('backend_dashboard');
Route::get('/dashboard/books', [BookController::class, 'backend_index'])->name('backend_books');
Route::get('/dashboard/members', [MemberController::class, 'backend_index'])->name('backend_members');
Route::get('/dashboard/records', [BorrowRecordController::class, 'backend_index'])->name('backend_records');

// Books CRUD

// Books Insert & Store
Route::get('/dashboard/books/insert', [BookController::class, 'insert'])->name('insert_books');
Route::post('/dashboard/books/store', [BookController::class, 'store'])->name('store_books');

// Books Edit & Update
Route::get('/dashboard/books/edit/{id}', [BookController::class, 'edit'])->name('edit_books');
Route::patch('/dashboard/books/update/{id}', [BookController::class, 'update'])->name('update_books');

// Books Delete
Route::delete('/dashboard/books/delete/{id}', [BookController::class, 'delete'])->name('delete_books');

// Members CRUD

// Members Insert & Store
Route::get('/dashboard/members/insert', [MemberController::class, 'insert'])->name('insert_members');
Route::post('/dashboard/members/store', [MemberController::class, 'store'])->name('store_members');

// Members Edit & Update
Route::get('/dashboard/members/edit/{id}', [MemberController::class, 'edit'])->name('edit_members');
Route::patch('/dashboard/members/update/{id}', [MemberController::class, 'update'])->name('update_members');

// Books Delete
Route::delete('/dashboard/members/delete/{id}', [MemberController::class, 'delete'])->name('delete_members');

