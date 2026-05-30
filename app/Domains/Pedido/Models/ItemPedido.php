<?php

namespace App\Domains\Pedido\Models;

use Illuminate\Database\Eloquent\Model;
use App\Domains\Produto\Models\Produto;

class ItemPedido extends Model {
    protected $fillable = [
        'pedido_id',
        'produto_id',
        'quantidade',
        'preco',
    ];

    public function pedido() {
        return $this->belongsTo(Pedido::class);
    }

    public function produto() {
        return $this->belongsTo(Produto::class);
    }
}
