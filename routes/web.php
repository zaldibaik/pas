<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\beritaController;
use App\Http\Controllers\CategoriController;  

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/berita', [App\Http\Controllers\beritaController::class, 'berita'])->name('berita');

Route::get('/kategori/create', [CategoriController::class, 'create'])->name('create');
Route::get('/categori', [CategoryController::class, 'store'])->name('categori.store');