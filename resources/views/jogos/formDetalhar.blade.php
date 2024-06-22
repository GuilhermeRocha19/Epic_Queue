@extends('components/alert')
@extends('layouts/admin')
@section('content')
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between">
            <span>Visualizar Jogo</span>
            <span>
                <a href="{{ route('Jogo.index') }}" class="btn btn-info btn-sm me-1">Listar</a>
                <a href="{{ route('Jogo.edit', ['Jogo' => $Jogo->id]) }}" class="btn btn-warning btn-sm me-1">Editar</a>
            </span>
        </div>


        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{ $Jogo->id }}</dd>

                <dt class="col-sm-3">Nome</dt>
                <dd class="col-sm-9">{{ $Jogo->nome }}</dd>

                <dt class="col-sm-3">Valor</dt>
                <dd class="col-sm-9">{{ number_format($Jogo->valor, 2, ',', '.') }}</dd>

                <dt class="col-sm-3">Vencimento</dt>
                <dd class="col-sm-9">
                    {{ \Carbon\Carbon::parse($Jogo->vencimento)->tz('America/Sao_Paulo')->format('d/m/Y') }}</dd>

                <dt class="col-sm-3">Data Criação</dt>
                <dd class="col-sm-9">
                    {{ \Carbon\Carbon::parse($Jogo->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}</dd>

                <dt class="col-sm-3">Última Alteração</dt>
                <dd class="col-sm-9">
                    {{ \Carbon\Carbon::parse($Jogo->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s') }}</dd>
            </dl>

        </div>
    </div>
@endsection
