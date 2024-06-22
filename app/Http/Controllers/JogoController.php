<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogoController extends Controller
{

    function formListar(){
        $jogos = Jogo::all();

        return view('jogos.formListar', ['jogos' => $jogos]);
    }

    function formDetalhar(){
        return view('jogos.formDetalhar');
    }
    
    function formCadastrar(){
        return view('jogos.formCadastrar');
    }

    function cadastrar(){
        dd("cadastrar");
    }

    function formEditar(){
        return view('jogos.formEditar');
    }

    function editar(){
        dd("editar");
    }

}
