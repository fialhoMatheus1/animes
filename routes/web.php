<?php

use App\Http\Controllers\AnimeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//homepage:
Route::get('/',[HomeController::class,'Home'])->name('home');

//cadastrar:
Route::get('/cadastrar-anime',[AnimeController::class,'Cadastrar'])->name('cadastrar-anime');
Route::post('/cadastrar-anime',[AnimeController::class,'SalvarBanco'])->name('salvar-banco');

//lista:
Route::get('/listar-anime',[AnimeController::class,'MostrarLista'])->name('listar-anime');

//tela editar:
Route::get('/editar-anime',[AnimeController::class,'MostrarEditar'])->name('editar-anime');

//tela alterar dados:


//botao alterar dados:
Route::get('/alterar-ainime/{registrosFinais}',[AnimeController::class,'Alterar'])->name('alterar-anime');
Route::put('/alterar-ainime/{registrosFinais}',[AnimeController::class,'AlterarBanco'])->name('alterar-banco');

//boatao deletar dados:
Route::delete('/editar-anime/{registrosFinais}',[AnimeController::class,'ApagarBancoAnime'])->name('apagar-anime');
