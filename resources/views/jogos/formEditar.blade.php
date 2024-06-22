@extends('components/alert')
@extends('layouts/admin')
@section('content')
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between">
            <span>Editar Jogo</span>
            <span>
                <a href="{{ route('Jogo.index') }}" class="btn btn-info btn-sm me-1">Listagem</a>
                <a href="{{ route('Jogo.show', ['Jogo' => $Jogo->id]) }}"
                    class="btn btn-warning btn-sm me-1">Visualizar</a>
            </span>
        </div>

        <div class="card-body">
            <form action="{{ route('Jogo.update', ['Jogo' => $Jogo->id]) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')
                <div class="col-md-12">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" id="nome" value="{{ old('nome', $Jogo->nome) }}"
                        class="form-control">
                </div>

                <div class="col-md-12">
                    <label for="valor" class="form-label">Valor</label>
                    <input type="text" name="valor" id="valor"
                        value="{{ old('valor', isset($Jogo->valor) ? number_format($Jogo->valor, 2, ',', '.') : '') }}"
                        class="form-control">
                </div>

                <div class="col-md-12">
                    <label for="vencimento" class="form-label">Vencimento</label>
                    <input type="date" name="vencimento" id="vencimento"
                        value="{{ old('vencimento', $Jogo->vencimento) }}" class="form-control">
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                </div>
            </form>
        </div>
    @endsection
