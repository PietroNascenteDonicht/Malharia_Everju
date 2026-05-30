@extends('layouts.app')

@section('content')

<div class="container">

    <div class="produto-page">

        <!-- IMAGEM -->
        <div class="produto-image">
            <img 
                src="/img/{{ $produto->imagem }}" 
                alt="{{ $produto->nome }}"
            >
        </div>

        <!-- INFO -->
        <form class="produto-info" action="{{ route('carrinho.add') }}" method="post">
            @csrf
            <h1 class="produto-title">
                {{ $produto->nome }}
            </h1>

            <div class="produto-price">
                R$ {{ number_format($produto->preco, 2, ',', '.') }}
            </div>

            <p class="produto-description">
                {{ $produto->descricao }}
            </p>

            <input type="hidden" name="produto_id" value="{{ $produto->id }}">

            <ul class="produto-meta">
                <li>
                    <strong>Categoria:</strong> {{ $produto->categoria->nome ?? 'Não definida' }}
                </li>

                <li>
                    <strong>Disponível:</strong> {{ $produto->estoque > 0 ? 'Sim' : 'Esgotado' }}
                </li>
            </ul>

            <div class="produto-actions">
                <button class="btn-primary-custom">
                    Comprar
                </button>

                <a href="{{ route('home.index') }}" class="btn-secondary">
                    Voltar
                </a>
            </div>

        </form>

    </div>

</div>

@endsection