<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UsernameController;
use App\Http\Controllers\DetailTrxController;

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
    return view('welcome');
});
Route::get('/barang',[BarangController::class , 'index']);
Route::get('/barang/create',[BarangController::class , 'create']);
Route::post('/barang/store',[BarangController::class , 'store']);
Route::get('/barang/edit{id}',[BarangController::class , 'edit']);
Route::post('/barang/update',[BarangController::class , 'update']);
Route::get('/barang/destroy{id}',[BarangController::class , 'destroy']);
Route::get('/barang/detail{id}',[BarangController::class , 'detail']);


Route::get('/transaksi',[TransaksiController::class , 'index']);
Route::get('/transaksi/create',[TransaksiController::class , 'create']);
Route::post('/transaksi/store',[TransaksiController::class , 'store']);
Route::get('/transaksi/edit{id}',[TransaksiController::class , 'edit']);
Route::post('/transaksi/update',[TransaksiController::class , 'update']);
Route::get('/transaksi/destroy{id}',[TransaksiController::class , 'destroy']);
Route::get('/transaksi/detail{id}',[TransaksiController::class , 'detail']);



Route::get('/username',[UsernameController::class , 'index']);
Route::get('/username/create',[UsernameController::class , 'create']);
Route::post('/username/store',[UsernameController::class , 'store']);
Route::get('/username/edit{id}',[UsernameController::class , 'edit']);
Route::post('/username/update',[UsernameController::class , 'update']);
Route::get('/username/destroy{id}',[UsernameController::class , 'destroy']);

