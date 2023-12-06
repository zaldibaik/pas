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



Route::get('/berita', [App\Http\Controllers\beritaController::class, 'berita'])->name('berita');

Route::get('/kategori/create', [CategoriController::class, 'create'])->name('categori.create');
Route::post('/kategori', [CategoryController::class, 'store'])->name('categori.store');
// Route::get('/kategori', [CategoriController::class, 'index'])->name('categori.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');