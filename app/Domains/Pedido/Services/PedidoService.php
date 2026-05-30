<?php 
namespace App\Domains\Pedido\Services;

use Illuminate\Support\Facades\DB;

use App\Domains\Produto\Models\Produto;
use App\Domains\Carrinho\Models\Carrinho;
use App\Domains\Pedido\Models\Pedido;
use App\Domains\Pedido\Models\ItemPedido;

class PedidoService {
    #criar pedido

    public function criarPedido($usuario_id){
    
        $carrinho = Carrinho::with('itens')->where('usuario_id', $usuario_id)->first();

        if(!$carrinho || $carrinho->itens->isEmpty()){
            throw new \Exception('Carrinho vazio');
        }

        DB::transaction(function () use ($carrinho, $usuario_id) {

            $pedido = Pedido::create([
                'usuario_id' => $usuario_id,
                'total' => $carrinho->total,
            ]);

            $produtos = Produto::whereIn(
                'id',
                $carrinho->itens->pluck('produto_id')
            )->lockForUpdate()->get()->keyBy('id');
            
            foreach($carrinho->itens as $item){

                $produto = $produtos[$item->produto_id] ?? null;
                if(!$produto){
                    throw new \Exception('Produto não encontrado');
                }

                if($produto->estoque < $item->quantidade){
                    throw new \Exception('Estoque insuficiente');
                }

                $produto->decrement('estoque', $item->quantidade);

                ItemPedido::create([
                    'pedido_id' => $pedido->id,
                    'produto_id' => $produto->id,
                    'quantidade' => $item->quantidade,
                    'preco' => $produto->preco,
                ]);
            }
        

            $carrinho->delete();

            return $pedido;
        });
    }
}