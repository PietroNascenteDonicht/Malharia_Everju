@extends('admin.app')

@section('content')
<section class="app-layout">

    <section>
        <h1>Pedido {{ $pedido->id }} <i class="badge enviado">Enviado</i></h1>

        <p>Realizado em {{ $pedido->created_at->format('d/m/y') }}</p>

        <span class="btns">
            <a href="" class="btn-primary-custom">Marcar como enviado</a>
            <a class="btn-secondary">Enviado Email</a>
            <a class="btn-tertiary">Cancelar pedido</a>
        </span>
    </section>

    <section class="sec-item">
        <h1>Itens do Pedido</h1>

        @foreach($pedido->itens as $item)
        
        <div class="pedido-item">

            <img 
                class="pedido-item-image"
                src="$item->produto->imagem"
            >

            <div class="pedido-item-info">
                <div class="pedido-item-nome">
                    {{ $item->produto->nome }}
                </div>

                <div class="pedido-item-tamanho">
                    Preto - Tamanho M
                </div>

                <div class="pedido-item-quantidade">
                    Quantidade: {{ $item->quantidade }}
                </div>
            </div>
            <p class="pedido-item-price">
                R$ {{ number_format($item->produto->preco, 2, ',', '.') }}
            </p>
        </div>

        @endforeach
    </section>            

    <section class="sec-item">
        <h1>Resumo Financeiro</h3>
        <p>Subtotal R$ 369,70</p>
        <p>Frete R$ 15,00</p>
        <p>Total R$ {{ number_format($pedido->total, 2, ',', '.') }}</p>
    </section>

    <section class="sec-item">
        <h1>Informações do Cliente</h1>
        <p>Nome: {{ $pedido->usuario->nome }}</p>
        <p>Email: {{ $pedido->usuario->email }}</p>
        <p>Telefone: {{ $pedido->usuario->telefone }}</p>
    </section>

    <section class="sec-item">
        <h1>Endereço de Entrega</h1>
        <p>Rua das Flores, 123</p>
        <p>Apto 45</p>
        <p>Centro</p>
        <p>São Paulo - SP</p>
        <p>CEP: 01234-567</p>
    </section>
</section>
@endsection