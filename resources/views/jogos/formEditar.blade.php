
@extends('layouts/admin')
@section('content')
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between">
            <span>Editar Jogo</span>
            <span>
                <a href="{{ route('jogo.listar') }}" class="btn btn-info btn-sm me-1">Listagem</a>
                <a href="{{ route('jogo.detalhar', ['jogo' => $jogo->id]) }}"
                    class="btn btn-warning btn-sm me-1">Visualizar</a>
            </span>
        </div>

        <div class="card-body">
            <form action="{{ route('jogo.execEditar', ['jogo' => $jogo->id]) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')
                @csrf
                <div class="col-md-12">
                    <label for="nome" class="form-label label-warning">Nome</label>
                    <input type="text" name="nome" id="nome" value="{{ old('nome', $jogo->nome) }}"
                        class="form-control">
                </div>

                <div class="col-md-12">
                    <label for="nota" class="form-label">Nota</label>
                    <input type="number" name="nota" id="nota" value="{{ old('nota' , $jogo->nota) }}" placeholder="1 a 10" class="form-control">
                </div>

                <div class="col-md-12">
                    <label for="vencimento" class="form-label">Descricao</label>
                        
                        <textarea  class="form-control" name="descricao" id="descricao" cols="30" rows="10">{{ old('descricao' , $jogo->descricao) }}</textarea>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                </div>
            </form>
        </div>
    @endsection
