<?php
namespace App\Domains\Admin\Controllers;
use App\Http\Controllers\Controller;
use App\Domains\Pedido\Controllers\PedidoController;
use App\Domains\Pedido\Models\Pedido;
use App\Domains\Produto\Controllers\ProdutoController;
use App\Domains\Produto\Models\Produto;
use App\Domains\Usuario\Controllers\UserController;
use App\Domains\Produto\Models\Categoria;
use App\Domains\Usuario\Models\Usuario;
use Carbon\Carbon;

class AdminController extends Controller {
    public function index(){
        $totalPedidos = Pedido::all()->sum('total');
        $countUsuarios = Usuario::all()->count();
        $countPedidos = Pedido::all()->count();
        $produtosAtivos = Produto::where('ativo', 1)->count();

        $pedidos = Pedido::withUsuario()->get();
        return view('admin.dashboard', compact('totalPedidos', 'countUsuarios', 'countPedidos', 'produtosAtivos', 'pedidos'));
    }

    public function pedidos(){
        $pedidos = Pedido::withUsuario()->get();

        return view('admin.pedidos', compact('pedidos'));
    }

    public function pedidoDetalhes(int $id){
        $objpedido = Pedido::find($id);

        $pedido = $objpedido->load('itens.produto');

        return view('admin.pedido-detalhes', compact('pedido'));
    }

    public function produtos(){
        $produtos = Produto::withCategoria()->get();
        return view('admin.produtos', compact('produtos'));
    }
    
    public function categorias(){
        $countProdutos = Produto::all()->groupBy('categoria_id');
        $categorias = Categoria::all();
        return view('admin.categorias', compact('categorias', 'countProdutos'));
    }

    public function frete(){
        return view('admin.frete');
    }
}