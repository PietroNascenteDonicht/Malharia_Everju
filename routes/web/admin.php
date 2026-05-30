<?php
use Illuminate\Support\Facades\Route;

use App\Domains\Admin\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/pedidos', [AdminController::class, 'pedidos'])->name('admin.pedidos');
Route::get('/admin/pedidos/detalhes/{id}', [AdminController::class, 'pedidoDetalhes'])->name('admin.pedido-detalhes');
Route::get('/admin/produtos', [AdminController::class, 'produtos'])->name('admin.produtos');
Route::get('/admin/categorias', [AdminController::class, 'categorias'])->name('admin.categorias');
Route::get('/admin/frete', [AdminController::class, 'frete'])->name('admin.frete');