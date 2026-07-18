<?php

namespace App\Domains\Carrinho\Controllers;
use Illuminate\Http\Request;

use App\Domains\Carrinho\Models\Carrinho;
use App\Domains\Carrinho\Models\ItemCarrinhos;
use App\Domains\Produto\Models\Produto;
use App\Domains\Produto\Models\ProdutoVariacao;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

use function Laravel\Prompts\number;

class CarrinhoController extends Controller {
    public function index() {
        $carrinho = Carrinho::firstOrCreate(
            ['usuario_id' => Auth::id()],
            []
        );

        $carrinho->load('itens.produtoVariacao');

        return view('carrinho.index', compact('carrinho'));
    }

    public function add(Request $request) {
        $produtoVariacao = ProdutoVariacao::findOrFail((INT) $request->produto_id);
        $preco = Produto::findOrFail((INT) $produtoVariacao->produto_id)->preco;

        $carrinho = Carrinho::firstOrCreate([
            'usuario_id' => Auth::id()
        ]);
        
        $item = ItemCarrinhos::where('carrinho_id', $carrinho->id)->where('produto_variacao_id', $produtoVariacao->id)->first();

        if($item){
            $item->increment('quantidade');
        } else {
            ItemCarrinhos::create([
                'carrinho_id' => $carrinho->id,
                'produto_variacao_id' => $produtoVariacao->id,
                'quantidade' => 1,
                'preco' => $preco,
            ]);
        }

        return back();
    }

    public function quantity(Request $request, $id) {
        $carrinho = carrinho::where('usuario_id', auth::id())->first();
        $item = ItemCarrinhos::where('carrinho_id', $carrinho->id)->where('id', $id)->first();

        if($request->action === 'add') {
            $item->increment('quantidade');

        }elseif ($request->action === 'minus') {
            if($item->quantidade <= 1){
                $item->delete();
            }else{
                $item->decrement('quantidade');
            }
        }

        return back();
    }

    
}
