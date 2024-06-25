@extends('layouts/admin')
@section('content')
<div class="card mt-3 mb-4 border-light shadow bg-dark text-white">
    <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
        <span>Pesquisar</span>
    </div>
    <div class="card-body">
        <form action="{{ route('jogo.listar') }}">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <label class="form-label" for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control bg-secondary text-white" placeholder="Nome do jogo"
                        value="">
                </div>

                <div class="col-md-3 col-sm-12">
                    <label class="form-label" for="data_inicio">Data Início</label>
                    <input type="date" name="data_inicio" id="data_inicio" class="form-control bg-secondary text-white" value="">
                </div>

                <div class="col-md-3 col-sm-12">
                    <label class="form-label" for="data_final">Data Final</label>
                    <input type="date" name="data_final" id="data_final" class="form-control bg-secondary text-white" value="">
                </div>

                <div class="col-md-3 col-sm-12 mt-3 pt-4">
                    <button type="submit" class="btn btn-info btn-sm">Pesquisar</button>
                    <a href="{{ route('jogo.listar') }}" class="btn btn-info btn-sm">Limpar</a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card mt-4 mb-4 border-light shadow bg-dark text-white">
    <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
        <span>Listar jogos</span>
        <div>
            <a href="{{ route('jogo.cadastrar') }}" class="btn btn-success btn-sm">Cadastrar</a>
            <a href=" {{ url('gerar-pdf-jogo?' . request()->getQueryString()) }}" class="btn btn-warning btn-sm">Gerar PDF</a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Nota</th>
                        <th scope="col">Descrição</th>
                        <th scope="col" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($jogos as $jogo)
                        <tr>
                            <td>{{ $jogo->id }}</td>
                            <td>{{ $jogo->nome }}</td>
                            <td>{{ $jogo->nota . ' / 10' }}</td>
                            <td>{{ $jogo->descricao }}</td>
                            <td>
                                <a href="{{ route('jogo.detalhar', ['jogo' => $jogo->id]) }}" class="btn btn-info btn-sm me-1">
                                    Visualizar
                                </a>
                                <a href="{{ route('jogo.editar', ['jogo' => $jogo->id]) }}" class="btn btn-warning btn-sm me-1">
                                    Editar
                                </a>
                                {{-- Formulário para exclusão --}}
                                {{-- <form id="formExcluir{{ $jogo->id }}" action="{{ route('jogo.deletar', ['jogo' => $jogo->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm me-1" type="submit" onclick="confirmarExclusao(event, {{ $jogo->id }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M2.5 5.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5V6h-11v-.5zm1.5 1V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6.5h-10z"/>
                                            <path fill-rule="evenodd" d="M6 1a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V2h-4V1zM3.5 3a.5.5 0 0 0-.5.5V4a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V3.5a.5.5 0 0 0-.5-.5h-9z"/>
                                        </svg>
                                    </button>
                                </form> --}}
                            </td>
                            
                            
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center" style="color: #f00;">Nenhum jogo encontrado</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{-- {{ $jogos->onEachSide(5)->links() }} --}}
    </div>
</div>
@endsection
