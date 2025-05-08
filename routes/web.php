<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MerekController;
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
Route::get('/', function () {
});    
Route::get('/', function () {
     return view('welcome');
    });
//crud
//Role admin
Route::prefix('admin')->middleware('auth')->group(function () {
Route::resource('kategori',KategoriController::class);
Route::resource('produk',ProdukController::class);
Route::resource('merek',MerekController::class);
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
