<?php

namespace App\Domains\Produto\Controllers;

use Illuminate\Http\Request;
use App\Domains\Produto\Models\Produto;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller {
    public function index() {
        $produtos = Produto::all();
        return view('produto.index', compact('produtos'));
    }

    public function show($id) {
        $produto = Produto::where('id', $id)->first();

        return view('produto.show', compact('produto'));
    }

    public function categoria($categoria){
        $categoria = (INT) $categoria;
        $produtos = Produto::where('categoria_id', $categoria)->get();

        return view('produto.index', compact('produtos'));
    }
}
