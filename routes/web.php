<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController, ProdutoController};
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
/* Home */
Route::get('/', function () {
    return view('login');
})->name('home');

/* Rotas de login */
//Route::get('/',[AuthController::class, 'login'])->name('home');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin');
Route::post('/autenticacao', [AuthController::class, 'login'])->name('login.auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout.auth');

/* Rotas de produto */
Route::get('/produto/cadastro',[ProdutoController::class, 'viewNProduto'])->name('cadastro.produto');
