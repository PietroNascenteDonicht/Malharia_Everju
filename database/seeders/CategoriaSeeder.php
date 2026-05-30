<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Domains\Produto\Models\Categoria;

class CategoriaSeeder extends Seeder {
    public function run() {
        $categorias = [
            'Camisetas',
            'Moletons',
            'Calças',
            'Jaquetas',
            'Shorts',
            'Regatas',
            'Camisas',
            'Tênis',
            'Acessórios',
        ];

        foreach ($categorias as $nome) {
            Categoria::create([
                'nome' => $nome,
                'slug' => Str::slug($nome),
            ]);
        }
    }
}