<?php

namespace App\Domains\Home\Controllers;

use App\Domains\Produto\Models\Categoria;
use App\Domains\Produto\Models\Produto;
use Hamcrest\Core\AllOf;
use App\Http\Controllers\Controller;

class HomeController extends Controller {
    public function index() {
        $produtos = Produto::destaques(false)->get();
        $destaques = Produto::destaques(true)->get();
        $categorias = Categoria::all();

        return(view('home.index', (compact('produtos', 'destaques', 'categorias'))));
    }
}
