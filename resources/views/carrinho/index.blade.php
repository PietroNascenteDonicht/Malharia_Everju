@extends('layouts.app')

@section('content')

<div class="app-layout">

    <h1 class="cart-title underline-accent left">Carrinho de compras</h1>

    <div class="cart">

        <!-- LISTA DE PRODUTOS -->
        <div class="cart-items">
            @forelse($carrinho->itens as $item)
                <x-item-carrinho :carrinho="$carrinho" :item="$item" />
            @empty
                <div class="cart-empty">
                    <h3>Seu carrinho está vazio</h3>
                    <p>Adicione produtos para continuar suas compras.</p>

                    <a href="{{ route('home.index') }}" class="btn-primary-custom">
                        Ver produtos
                    </a>
                </div>
            @endforelse

        </div>

        <!-- RESUMO -->
        <div class="cart-summary">

            <h3>Resumo</h3>

            <div class="cart-summary-row">
                <span>Subtotal</span>
                <span>R$ 199,90</span>
            </div>

            <div class="cart-summary-row">
                <span>Frete</span>
                <span>Grátis</span>
            </div>

            <div class="cart-summary-total">
                <span>Total</span>
                <span>R$ {{ number_format($carrinho->total, 2, ',', '') }}</span>
            </div>
            <form action="{{ route('checkout.store') }}" method="post">
                @csrf
                <button class="btn-primary-custom">
                    Finalizar Compra
                </button>
            </form>
            <a class="btn-secondary-custom" href="">Continuar Comprando</a>
        </div>

    </div>

</div>

@endsection