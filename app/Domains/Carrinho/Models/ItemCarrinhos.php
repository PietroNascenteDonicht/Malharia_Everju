<?php

namespace App\Domains\Carrinho\Models;

use Illuminate\Database\Eloquent\Model;

use App\Domains\Produto\Models\Produto;

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
        'produto_id',
        'quantidade',
        'preco',
    ];

    public function produto() {
        return $this->belongsTo(Produto::class, 'produto_id');
    }

    public function getSubtotalAttribute() {
        return $this->preco * $this->quantidade;
    }
}

