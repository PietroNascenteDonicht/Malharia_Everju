@extends('layouts.app')

@section('content')

<div class="container">

    <div class="pedido-show">

        <!-- HEADER -->
        <div class="pedido-show-header">
            <div>
                <h2>Pedido #{{ $pedido->id }}</h2>
                <span class="pedido-show-date">
                    {{ $pedido->created_at->format('d/m/Y H:i') }}
                </span>
            </div>

            <span class="pedido-status status-{{ $pedido->status }}">
                {{ ucfirst($pedido->status) }}
            </span>
        </div>

        <!-- ITENS -->
        <div class="pedido-show-items">

            @foreach($pedido->itens as $item)

                <div class="pedido-show-item">

                    <img src="https://via.placeholder.com/80">

                    <div class="pedido-show-info">
                        <div class="pedido-show-nome">
                            {{ $item->produto->nome }}
                        </div>

                        <div class="pedido-show-meta">
                            Quantidade: {{ $item->quantidade }}
                        </div>

                        <div class="pedido-show-meta">
                            Preço unitário: 
                            R$ {{ number_format($item->preco, 2, ',', '.') }}
                        </div>
                    </div>

                    <div class="pedido-show-total">
                        R$ {{ number_format($item->preco * $item->quantidade, 2, ',', '.') }}
                    </div>

                </div>

            @endforeach

        </div>

        <!-- TOTAL -->
        <div class="pedido-show-footer">
            <div class="pedido-show-total-final">
                Total: R$ {{ number_format($pedido->total, 2, ',', '.') }}
            </div>

            <a href="{{ route('pedidos.index') }}" class="pedido-btn">
                Voltar
            </a>

            @if($pedido->status === 'pendente')
                <form action="{{ route('pedido.pagar', $pedido->id) }}" method="POST">
                    @csrf
                    <button class="btn-primary-custom">
                        Pagar Pedido
                    </button>
                </form>

            @endif

        </div>

    </div>

</div>

@endsection