<?php

namespace App\Domains\Produto\Models;

use Illuminate\Database\Eloquent\Model;

class ProdutoVariacao extends Model
{
    protected $table = 'produto_variacoes';

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

    public function cor()
    {
        return $this->belongsTo(Cor::class);
    }

    public function tamanho()
    {
        return $this->belongsTo(Tamanho::class);
    }
}
