<?php

namespace App\Domains\Pedido\Controllers;

use Illuminate\Http\Request;

use App\Domains\Pedido\Services\PedidoService;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller {
    protected $pedidoService;

    public function __construct(PedidoService $pedidoService) {
        $this->pedidoService = $pedidoService;
    }

    public function store(Request $request) {
        try{
            $this->pedidoService->criarPedido(Auth::id());

            return back()->with('success', 'Compra finalizada!');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
