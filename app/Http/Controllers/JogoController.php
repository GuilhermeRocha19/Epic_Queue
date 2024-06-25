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

    function formDetalhar(Jogo $jogo){
        return view('jogos.formDetalhar', ['jogo' => $jogo]);
    }
    
    function formCadastrar(){
        return view('jogos.formCadastrar');
    }

    function cadastrar(Request $request){
        $jogo = Jogo::create([
            'nome' => $request->nome,
            'nota' => $request->nota,
            'descricao' => $request->descricao
        ]);

        return redirect()->route('jogo.listar')->with('success', 'Cadastro realizado com sucesso!');
    }

    function formEditar(Jogo $jogo){
        return view('jogos.formEditar',['jogo' => $jogo]);
    }

    function editar(Request $request , Jogo $jogo){
        $jogo->update([
            'nome' => $request->nome,
            'nota' => $request->nota,
            'descricao' => $request->descricao
        ]);

        return redirect()->route('jogo.detalhar', ['jogo' => $jogo])->with('sucess', "jogo Alterado com sucesso");
    }

}
