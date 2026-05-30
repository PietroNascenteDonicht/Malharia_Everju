<?php

namespace App\Domains\Carrinho\Models;

use App\Domains\Carrinho\models\ItemCarrinhos;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model {
    protected $fillable = [
        'usuario_id'
    ];

    public function itens() {
        return $this->hasMany(ItemCarrinhos::class, 'carrinho_id');
    }

    

    public function getTotalAttribute() {
        return $this->itens->sum(function($item) {
            return $item->quantidade * $item->produto->preco;
        });
    }
}
