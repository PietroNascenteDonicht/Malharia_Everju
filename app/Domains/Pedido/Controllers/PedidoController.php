<?php

namespace App\Domains\Pedido\Controllers;

use Illuminate\Http\Request;

use App\Domains\Pedido\Models\Pedido;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;


class PedidoController extends Controller {

    public function index() {
        $pedidos = Pedido::where('usuario_id', Auth::id())->latest()->get();
        return view('pedido.index', compact('pedidos'));
    }

    public function show($id) {
        $pedido = Pedido::with('itens')->where('id', $id)->first();

        return view('pedido.show', compact('pedido'));
    }

    public function pagar($id){
        Pedido::where('id', $id)->update(['status' => 'pago']);
        return back();
    }
}
