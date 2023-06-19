<?php

use App\Http\Controllers\ProdukController;
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

Route::get('/', [ProdukController::class,'halaman']);
Route::resource('/produk', ProdukController::class);
Route::get('/add', function(){
    return view('content.add');
});
Route::get('/import',[ProdukController::class, 'ImportJson']);
Route::get('/ambil-data', [ProdukController::class, 'AmbilJson']);
