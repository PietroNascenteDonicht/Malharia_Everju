<?php

namespace App\Domains\Produto\Models;

use App\Domains\Produto\Models\itemColecao;

use Illuminate\Database\Eloquent\Model;

class Colecao extends Model {
    protected $table = 'colecoes';

    function ItemColecao() {
        return $this->hasMany(itemColecao::class);
    }

    function produtos() {
        return $this->belongsToMany(
            Produto::class,
            'item_colecoes',
            'colecao_id',
            'produto_id',
        );
    }
}
