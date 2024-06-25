<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        try {

            if($request->search){
                $search = $request->search;
            }else{
                $search = '';
            }

            $response = Http::get('https://api.rawg.io/api/games', [
                'key' => '5aed3679cf0f46839a518ac62a6f8232',
                'search' => $search,
            ]);

            $games = $response->json()['results'];

            return view('jogos.catalogo', compact('games'));

        } catch (\Exception $e) {
            return back()->withError('Erro ao buscar jogos: ' . $e->getMessage());
        }
    }
}
