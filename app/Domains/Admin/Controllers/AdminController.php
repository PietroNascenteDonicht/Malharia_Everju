<?php
namespace App\Domains\Admin\Controllers;
use App\Http\Controllers\Controller;

use App\Domains\Usuario\Models\Usuario;
use App\Domains\Usuario\Controllers\UserController;

use App\Domains\Pedido\Controllers\PedidoController;
use App\Domains\Pedido\Models\Pedido;

use App\Domains\Produto\Controllers\ProdutoController;
use App\Domains\Produto\Models\Produto;

use App\Domains\Produto\Models\Categoria;
use App\Domains\Produto\Requests\StoreCategoriaRequest;

use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Session\Store;

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

    public function store(StoreCategoriaRequest $request) {
        Categoria::create([
            'nome' => $request->nome,
            'slug' => Str::slug($request->nome),
        ]);

        return response()->json([
            'status' => 'success',
            'mensagem' => 'Categoria criada com sucesso',
        ]);
    }

    public function destroy() {
        header('Content-Type: application/json');
        $jsonbruto = file_get_contents('php://input');
        $slug = json_decode($jsonbruto, true);
        
        $categoria = Categoria::where('slug', $slug);

        if(isset($slug)) {
            $categoria->delete();

            $resposta = [
                'status' => 'success',
                'mensagem' => 'categoria deletada com sucesso',
            ];
        } else {
            $resposta = [
                'status' => 'error',
                'mensagem' => 'erro de processamento'
            ];
        }

        return response()->json($resposta);
    }


    public function frete(){
        return view('admin.frete');
    }
}