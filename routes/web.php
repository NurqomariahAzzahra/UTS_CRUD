<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DatapengusahaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RestoranController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ImageUploadController;


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

//Route Untuk Super Admin
Route::resource('datapengusaha', DatapengusahaController::class);

Route::get('/', function () {
    return view('user.welcome');
});

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth:sanctum', 'verified']);
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware(['auth:sanctum', 'verified']);
Route::resource('data', DataController::class);
Route::get('/search', [SearchController::class, 'search'])->name('search')->middleware(['auth:sanctum', 'verified']);
Route::get('/cari', [DataController::class, 'cari']);
Route::get('/redirects', [DataController::class, 'index']);

Route::resource('tmenu', TmenuController::class);

Route::get('kategori', function () {
    return view('User.halaman_kategori');
});

Route::get('bangli', function () {
    return view('user.bangli_kategori');
});

Route::get('kintamani', function () {
    return view('user.kintamani_kategori');
});

Route::get('susut', function () {
    return view('user.susut_kategori');
});

Route::get('tembuku', function () {
    return view('user.tembuku_kategori');
});

Route::get('popular-product', function () {
    return view('popular-product');
});


Route::resource('produk', ProdukController::class);
Route::get('/menu', [MenuController::class, 'index']);
Route::resource('resto', MenuController::class);
// Route::get('/resto', [MenuController::class, 'restoran']);
Route::resource('menu', MenuController::class);
Route::get('/home', [HomeController::class, 'index']);
Route::resource('restoran', RestoranController::class);
