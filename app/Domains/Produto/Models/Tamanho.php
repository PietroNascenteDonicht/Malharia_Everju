<?php

namespace App\Domains\Produto\Models;

use Illuminate\Database\Eloquent\Model;

class Tamanho extends Model
{
    protected $table = 'tamanhos';

    public function ProdutoVariacao(){
        return $this->hasMany(ProdutoVariacao::class);
    }
}
