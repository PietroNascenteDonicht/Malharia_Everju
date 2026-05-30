<?php

namespace Database\Seeders;

use App\Domains\Usuario\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Domains\Produto\Models\Categoria;
use App\Domains\Produto\Models\Produto;

class DatabaseSeeder extends Seeder {

    public function run() {
        $this->call([
            CategoriaSeeder::class,
            ProdutoSeeder::class, // depois das categorias!
        ]);
    }
}
