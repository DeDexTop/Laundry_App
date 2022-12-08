<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaundryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Kategori;
use App\Models\Laundry;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('login.index', [
        'title' => 'Login',
    ]);
});
Route::get('/beranda', function () {
    return view('index', [
        'title' => 'Beranda',
    ]);
});

Route::get('/about', function() {
    return view('about', [
        'title' => 'Tentang Kami'
    ]);
});

Route::get('/cucian', function() {
    return view('status-cucian', [
        'title' => 'Status Cucian Anda',
        'laundries' => Laundry::all()
    ]);
});

Route::get('/services', function() {
    return view('services', [
        'title' => 'Pelayanan Kami'
    ]);
});

Route::get('/kurir', function() {
    return view('kurir.index', [
        'title' => 'Kurir',
        'laundries' => Laundry::where('pilihan_pengiriman', '=', 'diantar')
                              ->where('status_cucian', '=', 'selesai dicuci')
    ]);
});


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {

    Route::get('/pencuci', function() {
        return view('pencuci.index', [
            'title' => 'Pencuci',
            'laundries' => Laundry::where('status_pencucian', 'belum dicuci')->get()
        ]);
    });

});



Route::middleware(['admin'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('/dashboard/user', UserController::class);

    Route::get('/dashboard/karyawan', [UserController::class, 'index']);

    Route::get('/dashboard/status', [DashboardController::class, 'status']);

    Route::resource('/dashboard/category', CategoryController::class);

    Route::resource('/kasir/laundry', LaundryController::class);
});

Route::middleware(['kasir'])->group(function () {

    
});



