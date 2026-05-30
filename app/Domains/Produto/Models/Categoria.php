<?php

namespace App\Domains\Produto\Models;

use Illuminate\Database\Eloquent\Model;
use App\Domains\Produto\Models\Produto;

class Categoria extends Model {
    public function produtos() {
        return $this->hasMany(Produto::class);
    }

    public function countProdutos() {
        return $this->produtos()->count();
    }
}