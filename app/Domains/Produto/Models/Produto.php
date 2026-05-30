<?php

namespace App\Domains\Produto\Models;

use Illuminate\Database\Eloquent\Model;

use App\Domains\Produto\Models\Categoria;

class Produto extends Model {
    protected $fillable = [
        'estoque',
    ];

    public function scopeWithCategoria($query) {
        return $query->select(
            'produtos.id',
            'produtos.nome',
            'produtos.descricao',
            'produtos.preco',
            'produtos.estoque',
            'produtos.imagem',
            'categorias.nome as categoria',
            'produtos.created_at',
            'produtos.updated_at'
        )->join('categorias', 'produtos.categoria_id',  '=', 'categorias.id');
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }

    public function scopeDestaques($query, $destaque) {
        return $query->where('destaque', $destaque);
    }

    public function getRouteKeyName() {
        return 'slug';
    }

    public function countProdutos() {
        return $this->produtos()->count();
    }
}