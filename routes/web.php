<?php

use App\Domains\Carrinho\Controllers\CarrinhoController;
use App\Domains\Pedido\Controllers\CheckoutController;
use App\Domains\Home\Controllers\HomeController;
use App\Domains\Pedido\Controllers\PedidoController;
use App\Domains\Produto\Controllers\ProdutoController;
use App\Domains\Usuario\Controllers\ProfileController;
use App\Domains\Usuario\Controllers\UserController;
use Illuminate\Support\Facades\Route;

# HOME
Route::get('/', [HomeController::class, 'index'])->name('home.index');

# PRODUTO
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produto.index'); //produtos all
Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');
Route::get('/produtos/{categoria}', [ProdutoController::class, 'categoria'])->name('produto.categoria'); //produtos por categoria

# LOGS
Route::get('/login', [UserController::class, 'loginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');

Route::post('/logout', [UserController::class, 'logout'])->name('logout.submit');

Route::get('/register', [UserController::class, 'registerForm'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.submit');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

# CARRINHO
Route::get('/carrinho', [CarrinhoController::class, 'index'])->middleware('auth')->name('carrinho.index');
Route::post('/carrinho/add', [CarrinhoController::class, 'add'])->middleware('auth')->name('carrinho.add');
Route::post('/carrinho/item/{item}/quantity', [CarrinhoController::class, 'quantity'])->name('carrinho.item.quantity');

Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

# PEDIDO
Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::get('/pedido/{id}', [PedidoController::class, 'show'])->name('pedido.show');
Route::post('/pedido/{id}/pagar', [PedidoController::class, 'pagar'])->name('pedido.pagar');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
[-----------------------]
    ADMIN
[-----------------------]
*/

Route::middleware(['auth', 'admin'])->group(function () {
    require __DIR__ . '/web/admin.php';
});