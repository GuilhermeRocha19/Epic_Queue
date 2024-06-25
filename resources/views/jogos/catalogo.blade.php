@extends('layouts.admin') <!-- Certifique-se de usar o layout correto -->

@section('content')
<style>
    body{
        color: white;
    }
    .card-img-top {
        height: 200px; 
        object-fit: cover; 
    }
    .card-body{
        color: white;
    }
</style>
<div class="row">

    <div class="col-md-12 mb-4">
        <form action="{{ route('jogo.catalogo') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Pesquisar jogo por nome" id="search" name="search">
                <button class="btn btn-outline-secondary" type="submit">Pesquisar</button>
            </div>
        </form>
    </div>


    @foreach ($games as $game)
        <div class="col-md-4 mb-4">
            <div class="card h-100"> 
                <img src="{{ $game['background_image'] }}" class="card-img-top img-fluid" alt="{{ $game['name'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $game['name'] }}</h5>

                    <p>{{ $game['name'] }}</p>

                    <button type="button" class="btn btn-dark">Adicionar</button>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection


