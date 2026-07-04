<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Domains\Produto\Models\Categoria;

class CategoriasSeeder extends Seeder {
    public function run() {
        $categorias = [
            ['nome' => 'Camisetas'],
            ['nome' => 'Calças'],
            ['nome' => 'Bermudas'],
            ['nome' => 'Shorts'],
            ['nome' => 'Jaquetas'],
            ['nome' => 'Moletons'],
            ['nome' => 'Vestidos'],
            ['nome' => 'Saias'],
            ['nome' => 'Blusas'],
            ['nome' => 'Regatas'],
            ['nome' => 'Camisas'],
            ['nome' => 'Tênis'],
            ['nome' => 'Sapatos'],
            ['nome' => 'Sandálias'],
            ['nome' => 'Chinelos'],
            ['nome' => 'Bonés'],
            ['nome' => 'Bolsas'],
            ['nome' => 'Mochilas'],
            ['nome' => 'Acessórios'],
            ['nome' => 'Esportivo'],
        ];

        foreach ($categorias as $categoria) {
            Categoria::create([
                'nome' => $categoria['nome'],
                'slug' => Str::slug($categoria['nome']),
            ]);
        }
    }
}