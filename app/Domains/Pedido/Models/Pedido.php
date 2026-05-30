<?php

namespace App\Domains\Pedido\Models;

use Illuminate\Database\Eloquent\Model;
use App\Domains\Usuario\Models\Usuario;

class Pedido extends Model  {
    protected $fillable = [
        'usuario_id',
        'total',
    ];

    public function itens() {
        return $this->hasMany(ItemPedido::class);
    }

    public function scopeWithUsuario($query){
        return $query->select(
            'pedidos.id',
            'usuarios.nome as usuario',
            'pedidos.total',
            'pedidos.status',
            'pedidos.created_at',
            'pedidos.updated_at'
        )->join('usuarios', 'pedidos.usuario_id', '=', 'usuarios.id');
    }

    public function usuario() {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
