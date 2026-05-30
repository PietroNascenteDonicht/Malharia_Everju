<a href="{{ route('produto.show', $produto->id) }}" class="product-card">

    <img 
        src="{{asset('img/' . $produto->imagem)}}" 
        class="product-image"
    >

    <div class="product-body">

        <div class="product-title">
            {{ $produto->nome }}
        </div>

        <div class="text-muted">
            {{ $produto->descricao }}
        </div>

        <div class="product-price">
            R$ {{ number_format($produto->preco, 2, ',', '.') }}
        </div>

    </div>

</a>