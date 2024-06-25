<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\JogoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Jogos

Route::get('/listar-jogo', [JogoController::class, 'formListar'])->name('jogo.listar');
Route::get('/cadastrar-jogo', [JogoController::class, 'formCadastrar'])->name('jogo.cadastrar');
Route::get('/editar-jogo/{jogo}', [JogoController::class, 'formEditar'])->name('jogo.editar');
Route::get('/detalhar-jogo/{jogo}', [JogoController::class, 'formDetalhar'])->name('jogo.detalhar');

Route::post('/execCadastro-jogo', [JogoController::class, 'cadastrar'])->name('jogo.execCadastro');
Route::put('/execEditar-jogo/{jogo}', [JogoController::class, 'editar'])->name('jogo.execEditar');
Route::delete('/execDelete-jogo', [JogoController::class, 'cadastrar'])->name('jogo.execDelete');

Route::get('/jogo-catalogo', [ApiController::class, 'index'])->name('jogo.catalogo');