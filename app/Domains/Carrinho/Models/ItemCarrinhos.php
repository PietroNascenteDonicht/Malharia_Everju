<?php

namespace App\Domains\Carrinho\Models;

use Illuminate\Database\Eloquent\Model;

use App\Domains\Produto\Models\Produto;
use App\Domains\Produto\Models\ProdutoVariacao;

class ItemCarrinhos extends Model {
    public $item;

    public function _construct($item) {
        $this->item = $item;
    }

    public function render() {
        return view('components.item-carrinho');
    }

    protected $fillable = [
        'carrinho_id',
        'produto_variacao_id',
        'quantidade',
        'preco',
    ];

    public function produtoVariacao() {
        return $this->belongsTo(ProdutoVariacao::class, 'produto_variacao_id');
    }

    public function getSubtotalAttribute() {
        return $this->preco * $this->quantidade;
    }
}

