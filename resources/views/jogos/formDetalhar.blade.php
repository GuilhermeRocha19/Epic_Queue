
@extends('layouts/admin')
@section('content')
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between">
            <span>Visualizar Jogo</span>
            <span>
                <a href="{{ route('jogo.listar') }}" class="btn btn-info btn-sm me-1">Listar</a>
                <a href="{{ route('jogo.editar', ['jogo' => $jogo->id]) }}" class="btn btn-warning btn-sm me-1">Editar</a>
            </span>
        </div>


        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{ $jogo->id }}</dd>

                <dt class="col-sm-3">Nome</dt>
                <dd class="col-sm-9">{{ $jogo->nome }}</dd>

                <dt class="col-sm-3">Nome</dt>
                <dd class="col-sm-9">{{ $jogo->nota }} / 10</dd>

                <dt class="col-sm-3">Descrição</dt>
                <dd class="col-sm-9">{{ $jogo->descricao }}</dd>

                <dt class="col-sm-3">Data Criação</dt>
                <dd class="col-sm-9">
                    {{ \Carbon\Carbon::parse($jogo->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}</dd>

                <dt class="col-sm-3">Última Alteração</dt>
                <dd class="col-sm-9">
                    {{ \Carbon\Carbon::parse($jogo->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}</dd>
            </dl>

        </div>
    </div>
@endsection
