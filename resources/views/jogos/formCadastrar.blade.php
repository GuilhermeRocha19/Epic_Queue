
@extends('layouts/admin')
@section('content')
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between">
            <span>Cadastrar jogo</span>
            <span>
                <a href="{{ route('jogo.listar') }}" class="btn btn-primary btn-sm me-1">Listagem</a>
            </span>
        </div>


        <div class="card-body">
            <form action="{{ route('jogo.execCadastro') }}" method="POST" class="row g-3">
                @csrf
                <div class="col-md-12">
                    <label for="nome" class="form-label label-warning">Nome</label>
                    <input type="text" name="nome" id="nome" value="{{ old('nome') }}"
                        class="form-control">
                </div>

                <div class="col-md-12">
                    <label for="nota" class="form-label">Nota</label>
                    <input type="number" name="nota" id="nota" value="{{ old('nota') }}" placeholder="1 a 10" class="form-control">
                </div>

                <div class="col-md-12">
                    <label for="vencimento" class="form-label">Descricao</label>
                        
                        <textarea value="{{ old('descricao') }}" class="form-control" name="descricao" id="descricao" cols="30" rows="10"></textarea>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-warning btn-sm">Cadastrar</button>
                </div>
            </form>
        </div>
    @endsection
