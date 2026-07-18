<?php
namespace App\Domains\Produto\Controllers;

use App\Domains\Produto\Models\Colecao;
use App\Domains\Produto\Models\itemColecao;
use App\Domains\Produto\Models\Produto;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class ProdutoController extends Controller {
    public function index() {
        $produtos = Produto::all();
        $colecao = Colecao::where('ativo', true)->get();
        return view('produto.index', compact('produtos', 'colecao'));
    }

    public function show(int $id) {
        $produto = Produto::with('variacoes.cor', 'variacoes.tamanho')
        ->findOrFail($id);

        $variacoes = $produto->variacoes->map(function ($v) {
            return [
                'id' => $v->id,
                'cor_id' => $v->cor_id,
                'tamanho_id' => $v->tamanho_id,
                'imagem' => $v->imagem,
                'estoque' => $v->estoque,
                'cor' => $v->cor->nome,
                'tamanho' => $v->tamanho->nome,
            ];
        });

        return view('produto.show', compact('produto', 'variacoes'));
    }

    public function categoria(int $categoria) {
        $categoria = (INT) $categoria;
        $produtos = Produto::where('categoria_id', $categoria)
        ->get();

        return view('produto.index', compact('produtos'));
    }

    public function colecao(int $colecao) {
        $colecao = (INT) $colecao;
        $produtos = Colecao::findOrFail($colecao)->produtos;

        return view('produto.index', compact('produtos'));
    }
}
