<?php
use Illuminate\Support\Facades\Route;

use App\Domains\Admin\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/pedidos', [AdminController::class, 'pedidos'])->name('admin.pedidos');
Route::get('/admin/pedidos/detalhes/{id}', [AdminController::class, 'pedidoDetalhes'])->name('admin.pedido-detalhes');

Route::get('/admin/produtos', [AdminController::class, 'produtos'])->name('admin.produtos');
Route::get('/admin/produtos/detalhes/{id}', [AdminController::class, 'produtoDetalhes'])->name('admin.produto-detalhes');


Route::get('/admin/categorias', [AdminController::class, 'categorias'])->name('admin.categorias');
Route::post('/admin/categorias', [AdminController::class, 'store'])->name('admin.categorias.store');
Route::delete('admin/categorias', [AdminController::class, 'destroy'])->name('admin.categorias.destroy');

Route::get('/admin/frete', [AdminController::class, 'frete'])->name('admin.frete');