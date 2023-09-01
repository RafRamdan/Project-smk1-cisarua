<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TransaksiController;

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



Route::middleware(['guest'])->group(function(){
    Route::get('/login',[SesiController::class,'index'])->name('login');
    Route::post('/login',[SesiController::class,'login']);
    
});

// Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::middleware(['auth'])->group(function(){
Route::get('/logout',[SesiController::class,'logout']);

Route::get('/', function () {
return view('/welcome');
});
Route::get('/dashboard',[\App\Http\Controllers\DashboardController::class,'index']);
Route::get('/dashboard/{id_transaksi}/detail',[\App\Http\Controllers\DashboardController::class,'detail']);

Route::get('/customers',[\App\Http\Controllers\CustomerController::class,'index']);
Route::post('/customers',[\App\Http\Controllers\CustomerController::class,'store']);
Route::get('/customers/create',[\App\Http\Controllers\CustomerController::class,'create']);
Route::get('/customers{id_customer}/edit',[\App\Http\Controllers\CustomerController::class,'edit']);
Route::put('/customers/{idcustomer}',[\App\Http\Controllers\CustomerController::class,'update']);
Route::delete('/customers/{id_customer}',[\App\Http\Controllers\CustomerController::class,'destroy']);


Route::get('/produks',[\App\Http\Controllers\ProdukController::class,'index']);
Route::post('/produks',[\App\Http\Controllers\ProdukController::class,'store']);
Route::get('/produks/create',[\App\Http\Controllers\ProdukController::class,'create']);
Route::get('/produks/{id_produk}/edit',[\App\Http\Controllers\ProdukController::class,'edit']);
Route::put('/produks/{id_produk}',[\App\Http\Controllers\ProdukController::class,'update']);
Route::delete('/produks/{id_produk}',[\App\Http\Controllers\ProdukController::class,'destroy']);
Route::resource('/produks', \App\Http\Controllers\ProdukController::class);

Route::get('/transaksi',[\App\Http\Controllers\TransaksiController::class,'index'])->name('transaksi');
Route::post('/transaksi',[\App\Http\Controllers\TransaksiController::class,'store']);
Route::get('/transaksi/create',[\App\Http\Controllers\TransaksiController::class,'create']);
Route::get('/transaksi/{id_transaksi}/edit',[\App\Http\Controllers\TransaksiController::class,'edit']);
Route::put('/transaksi/{id_transaksi}',[\App\Http\Controllers\TransaksiController::class,'update']);
Route::delete('/transaksi/{id_transaksi}',[\App\Http\Controllers\TransaksiController::class,'destroy']);
});
// Route::get('/search',[TransaksiController::class,'search']);
