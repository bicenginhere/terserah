<?php

use App\Http\Controllers\BacaController;
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

Route::get('/sini', function () {
    return view('cerita.tablescerita');
});
Route::get('/admin', function () {
    return view('admin.index');
});
//baca
Route::get('/baca', [BacaController::class, 'baca'])->name('baca');

Route::get('/tambahbaca', function () {
    return view('baca.tambahbaca');
});
Route::post('/simpanbaca', [BacaController::class, 'save'])->name('simpan.baca');

Route::get('/haleditbaca/{id}',[BacaController::class,'haleditbaca'])->name('haleditbaca');
Route::put('/editbaca/{id}' ,[BacaController::class,'editbaca'])->name('editbaca');

Route::get('/deletebaca/{id}', [BacaController::class, 'deletebaca'])->name('deletebaca]');
//endbaca
