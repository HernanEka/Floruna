<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostinganController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/register', [RegistrasiController::class, 'index']);
Route::post('/register', [RegistrasiController::class, 'register']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::post('/update/profile', [ProfileController::class, 'update']);

Route::get('/discover/news',[PostinganController::class, 'allpost']);
Route::get('/discover/news/detail/{id}',[PostinganController::class, 'detail_news']);

Route::get('/donation',[DonasiController::class, 'index']);
Route::get('/donation/detail/{id}',[DonasiController::class, 'detail']);
Route::get('/komunitas/donation',[DonasiController::class, 'donasi_kom']);
Route::get('/open/donation',[DonasiController::class, 'open']);
Route::post('/open/donation',[DonasiController::class, 'post_kom']);
Route::post('/donate/input', [TransaksiController::class, 'donate']);

Route::get('/komunitas/posting', [PostinganController::class, 'data_posting']);
Route::get('/postingan/detail/{id}', [PostinganController::class, 'detail']);
Route::get('/posting', [PostinganController::class, 'index']);
Route::post('/posting', [PostinganController::class, 'upload']);
Route::get('/postingan/update/{id}', [PostinganController::class, 'update']);
Route::post('/postingan/update/{id}', [PostinganController::class, 'ubah']);

Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/data/user', [AdminController::class, 'data_user']);
Route::get('/data/user/detail/{id}', [AdminController::class, 'detail_user']);

Route::get('/data/comunity', [AdminController::class, 'data_comunity']);
Route::get('/data/comunity/detail/{id}', [AdminController::class, 'detail_comunity']);

Route::get('/data/postingan', [AdminController::class, 'data_postingan']);
Route::get('/data/postingan/detail/{id}', [AdminController::class, 'detail_posting']);

Route::get('/data/postingan/konfirmasi/{id}', [PostinganController::class, 'konfirmasi']);
Route::get('/data/postingan/delete/{id}', [PostinganController::class, 'delete']);

Route::get('/data/donasi', [DonasiController::class, 'donasi_adm']);
Route::get('/data/donasi/add', [DonasiController::class, 'add']);
Route::post('/data/donasi/add', [DonasiController::class, 'post_adm']);
Route::get('/data/donasi/detail/{id}', [DonasiController::class, 'detail_adm']);
Route::get('/donasi/konfirmasi/{id}', [DonasiController::class, 'konfirmasi']);

Route::get('/data/transaksi', [AdminController::class, 'transaksi']);

Route::get('/logout', [LogoutController::class, 'logout']);
