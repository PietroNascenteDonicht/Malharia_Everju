<?php

namespace App\Domains\Produto\Models;

use Illuminate\Database\Eloquent\Model;

class itemColecao extends Model {
    protected $table = 'item_colecoes';

    public function Colecao() {
        return $this->belongsTo(Colecao::class);
    }
}
