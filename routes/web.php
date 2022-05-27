<?php

use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

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
    return view('entrada');
});

Route::get('/produto', [ProdutoController::class, 'index'])->name('produto');
//Route::get('/produto/inserir', [ProdutoController::class, 'criar']);
Route::get('/produto/criar', [ProdutoController::class, 'criar'])->name('produto/criar');
Route::get('/produto/ver/{prod}', [ProdutoController::class, 'ver'])->name('produto/ver');
Route::post('/produto/criar', [ProdutoController::class, 'inserir'])->name('produto/inserir');

Route::get('/noticia', [NoticiasController::class, 'index'])->name('noticia');
Route::get('/noticia/criar', [NoticiasController::class, 'criar'])->name('noticia/criar');
Route::get('/noticia/ver/{not}', [NoticiasController::class, 'ver'])->name('noticia/ver');
Route::post('/noticia/criar', [NoticiasController::class, 'inserir'])->name('noticia/inserir');