<?php

use App\Http\Controllers\BukuController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku',[BukuController::class,'index']);
Route::get('/buku/create',[BukuController::class,'create'])->name('create'); //kalo pake folder lagi dalem views ngetiknya, name('folder.file')
Route::post('/buku',[BukuController::class,'store'])->name('store');
Route::post('/buku/delete/{id}',[BukuController::class,'destroy'])->name('destroy');
Route::post('/buku/update/{id}',[BukuController::class,'update'])->name('update');
Route::get('/buku/edit/{id}',[BukuController::class,'edit'])->name('edit');
