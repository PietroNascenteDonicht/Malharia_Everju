@extends('layouts.app')

@section('content')

<div class="pedidos-container">

    @forelse($pedidos as $pedido)

    <a href="{{ route('pedido.show', $pedido->id) }}" class="pedido-card">

        <div class="pedido-header">
            <div class="pedido-info">
                <span class="pedido-id">Pedido #{{ $pedido->id }}</span>
                <span class="pedido-date">{{ $pedido->created_at->format('d/m/Y H:i') }}</span>
            </div>

            <span class="pedido-status status-{{ $pedido->status }}">
                {{ ucfirst($pedido->status) }}
            </span>
        </div>

        <div class="pedido-body">

            @foreach($pedido->itens as $item)

            <div class="pedido-item">
                <img src="https://via.placeholder.com/80">

                <div>
                    <div class="pedido-item-nome">
                        {{ $item->produto->nome }}
                    </div>

                    <div class="pedido-item-meta">
                        Qtd: {{ $item->quantidade }}
                    </div>
                </div>

                <div class="pedido-item-preco">
                    R$ {{ number_format($item->preco * $item->quantidade, 2, ',', '.') }}
                </div>
            </div>

            <div class="pedido-divider"></div>

            @endforeach

            <div class="pedido-total">
                Total: R$ {{ number_format($pedido->total, 2, ',', '.') }}
            </div>

        </div>

    </a>

    @empty

    <div class="pedidos-empty">
        Você ainda não fez nenhum pedido.
    </div>

    @endforelse

</div>

@endsection