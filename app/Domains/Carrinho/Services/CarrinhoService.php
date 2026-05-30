<?php

namespace App\Domains\Carrinho\Services;

use App\Domains\Carrinho\Models\Carrinho;
use App\Domains\Carrinho\Models\ItemCarrinhos;
use Illuminate\Support\Facades\Auth;

class CarrinhoService {
    public function getItensCount(){
        $data = ItemCarrinhos::join('carrinhos', 'item_carrinhos.carrinho_id', '=', 'carrinhos.id')->where('carrinhos.usuario_id', Auth::id())->sum('quantidade');
        
        $data = $data ?? '';

        if($data > 99){
            $data = '99+';
        }

        return $data;
    }
}