<?php

namespace App\Domains\Produto\Models;

use Illuminate\Database\Eloquent\Model;

class Cor extends Model {
    protected $table = 'cores';

    public function ProdutoVariacao(){
        return $this->hasMany(ProdutoVariacao::class);
    }
}
