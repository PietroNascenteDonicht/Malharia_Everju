@extends('layouts.app')

@section('content')

<div class="main-picture">
    @if(isset($colecao))
    <h1>{{ $colecao->nome}}</h1>
    <p>{{ $colecao->descricao }}</p>
    
    <a href="{{ route('produto.colecao', $colecao->id) }}" class="btn-primary-custom">Ver Coleção</a>
    @else

    @endif
</div>

<div class="container">
    <div class="space">
    <h2 class="underline-accent left">Malhas em Destaque</h2>

    <div class="carousel">

        @foreach($destaques as $destaque)
            <div class="carousel-slide">
                <x-card :produto="$destaque" />
            </div>
        @endforeach

    </div>
    </div>
    
    <div class="categ-sec space">
        <h2 class="underline-accent left">Explorar por Categoria</h2>

        <div class="categories carousel">
            @foreach($categorias as $categoria)
                <x-card-categoria :categoria="$categoria" />
            @endforeach
        </div>
    </div>
</div>

@endsection