@extends('layouts.app')

@section('content')

<div class="main-picture">
    <h1>Everju Essenciais</h1>
    <p>Conforto Urbano encontra estilo minimalista</p>
    
    <a href="" class="btn-primary-custom">Ver Coleção</a>
</div>

<div class="container">
    <div class="space">
    {{-- 🔥 DESTAQUES --}}
    <h2 class="underline-accent left">Malharia em Destaque</h2>

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

    <!-- {{-- 🛒 LISTAGEM --}}
    <h2 class="mb-4">Produtos</h2>

    <div class="row g-3">

        @foreach($produtos as $produto)
            <div class="products-grid">
                <x-card :produto="$produto" />
            </div>
        @endforeach

    </div> -->

</div>

@endsection