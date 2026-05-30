@extends('layouts.app')

@section('content')

@if(!empty($categoria))

@else

<section class="grid-layout">
    <div class="side-menu">
        <h1 class="underline-accent left">Produtos</h1>
        <p> 
            @if(!empty($produtos))
                {{ count($produtos) }}
            @else
                0
            @endif

            produtos encontrados
        </p>

        <form action="post" class="form-filtro">
            <h2>filtros</h2>
            <div>
                <label for="preco">Faixa de Preco</label>
                <input type="range" name="preco" id="">
            </div>

            <div>
                <label for="ordem">Ordenar por</label>
                <select name="ordem" id="">
                    <option value="">Mais recente</option>
                </select>
            </div>

            <div>
                <label for="">Tamanho</label>
                <i>
                    <input class="tamanho" type="button" name="tamanho" value="PP">
                    <input class="tamanho" type="button" name="tamanho" value="P">
                    <input class="tamanho" type="button" name="tamanho" value="M">
                    <input class="tamanho" type="button" name="tamanho" value="G">
                    <input class="tamanho" type="button" name="tamanho" value="GG">
                </i>
            </div>
        </form>
    </div>

    @if(!empty($produtos))
        <div class="app-layout">
            <div class="products-grid">
                @foreach($produtos as $produto)                
                    <x-card :produto="$produto" />
                @endforeach
            </div>
        </div>
    @else
        <div class="app-layout">
            <h1>oiii</h1>
        </div>
    @endif
</section>
@endif

@endsection