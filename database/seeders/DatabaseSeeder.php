<?php

namespace Database\Seeders;

use App\Domains\Usuario\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {
        $this->call([
            CategoriasSeeder::class,
            ProdutosSeeder::class,
            CoresSeeder::class,
            TamanhosSeeder::class,
            ProdutoVariacoesSeeder::class,
        ]);
    }
}
