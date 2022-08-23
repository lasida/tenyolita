<?php

use App\Http\Controllers\PortofolioController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang-kami');
Route::get('/pelayanan', function () {
    return view('pelayanan');
})->name('pelayanan');

Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio');
Route::post('/portofolio', [PortofolioController::class, 'store'])->name('portofolio.store');

Route::get('/karier', function () {
    return view('karier');
})->name('karier');
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
