<?php

use App\Http\Controllers\JogoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Jogos

Route::get('/listar-jogo', [JogoController::class, 'formListar'])->name('jogo.listar');
Route::get('/cadastrar-jogo', [JogoController::class, 'formCadastrar'])->name('jogo.cadastrar');
Route::get('/editar-jogo', [JogoController::class, 'formEditar'])->name('jogo.editar');
Route::get('/detalhar-jogo', [JogoController::class, 'formDetalhar'])->name('jogo.detalhar');

Route::post('/execCadastro-jogo', [JogoController::class, 'cadastrar'])->name('jogo.execCadastro');
Route::put('/execEditar-jogo', [JogoController::class, 'cadastrar'])->name('jogo.execEditar');
Route::delete('/execDelete-jogo', [JogoController::class, 'cadastrar'])->name('jogo.execDelete');