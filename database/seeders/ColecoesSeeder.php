<?php

namespace Database\Seeders;

use App\Domains\Produto\Models\Colecao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class ColecoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nome = 'Colecao six seven';
        Colecao::create([
            'nome' => $nome,
            'descricao' => 'Trazendo a aura para a malharia',
            'ativo' => true,
            'slug' => Str::slug($nome),
        ]);
    }
}
