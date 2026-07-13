<?php

namespace Database\Seeders;

use App\Domains\Usuario\Models\Usuario;
use Database\Seeders\Usuario as SeedersUsuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {
        $this->call([
            SeedersUsuario::class,
            CategoriasSeeder::class,
            ProdutosSeeder::class,
            CoresSeeder::class,
            TamanhosSeeder::class,
            ProdutoVariacoesSeeder::class,
        ]);
    }
}
