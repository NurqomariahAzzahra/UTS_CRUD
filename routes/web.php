<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\DatapengusahaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
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
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth:sanctum', 'verified']);
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware(['auth:sanctum', 'verified']);
Route::resource('data', DataController::class);
Route::get('/search', [SearchController::class, 'search'])->name('search')->middleware(['auth:sanctum', 'verified']);
Route::get('/cari', [DataController::class, 'cari']);
Route::get('/redirects', [DataController::class, 'index']);


Route::get('halamanmenu', function () {
    return view('halamanmenu');
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('dashboard', function () {
//     return view('dashboard');
// });
// Route::get('dashboardUsers', function () {
//     return view('dashboardUsers');
// });
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('halamanmenu', function () {
//     return view('halamanmenu');
// });

