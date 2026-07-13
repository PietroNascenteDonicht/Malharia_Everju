@extends('layouts.app')

@section('styles')
    @vite(['resources/js/produto.js'])
@endsection


@section('content')

<script>
    const variacoes = @js($variacoes);
</script>

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

            <input id="produto_id" type="hidden" name="produto_id" value="{{ $produto->id }}">
            
            <label>Cor</label>

            <div class="div-info">
                @foreach($produto->variacoes->unique('cor_id')->values() as $index => $variacao)
                    <label class="tamanho-show">
                        <input
                            type="radio"
                            name="cor"
                            value="{{ $variacao->cor_id }}"
                            {{ $index === 0 ? 'checked' : '' }}
                            hidden
                        >
                        {{ $variacao->cor->nome }}
                    </label>
                @endforeach
            </div>

            <label>Tamanho</label>

            <div class="div-info">
                @foreach($produto->variacoes->unique('tamanho_id')->values() as $index => $variacao)
                    <label class="tamanho-show">
                        <input
                            type="radio"
                            id="tamanho-{{ $variacao->tamanho_id }}"
                            name="tamanho"
                            value="{{ $variacao->tamanho_id }}"
                            {{ $index === 0 ? 'checked' : '' }}
                            hidden
                        >
                        {{ $variacao->tamanho->nome }}
                    </label>
                @endforeach
            </div>
            
            <ul class="produto-meta">
                <li>
                    <strong>Categoria:</strong> {{ $produto->categoria->nome ?? 'Não definida' }}
                </li>

                <li>
                    <strong>Estoque:</strong> {{ $produto->estoque > 0 ? $produto->Estoque : 'Esgotado' }}
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