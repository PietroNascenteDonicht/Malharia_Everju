<?php

namespace Database\Seeders;

use App\Domains\Tamanho\models\Tamanho;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TamanhosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tamanhos = [
            ['nome' => 'PP', 'tipo' => 'roupa'],
            ['nome' => 'P',  'tipo' => 'roupa'],
            ['nome' => 'M',  'tipo' => 'roupa'],
            ['nome' => 'G',  'tipo' => 'roupa'],
            ['nome' => 'GG', 'tipo' => 'roupa'],
            ['nome' => 'XG', 'tipo' => 'roupa'],

            ['nome' => '33', 'tipo' => 'calcado'],
            ['nome' => '34', 'tipo' => 'calcado'],
            ['nome' => '35', 'tipo' => 'calcado'],
            ['nome' => '36', 'tipo' => 'calcado'],
            ['nome' => '37', 'tipo' => 'calcado'],
            ['nome' => '38', 'tipo' => 'calcado'],
            ['nome' => '39', 'tipo' => 'calcado'],
            ['nome' => '40', 'tipo' => 'calcado'],
            ['nome' => '41', 'tipo' => 'calcado'],
            ['nome' => '42', 'tipo' => 'calcado'],
            ['nome' => '43', 'tipo' => 'calcado'],
            ['nome' => '44', 'tipo' => 'calcado'],
            ['nome' => '45', 'tipo' => 'calcado'],
        ];

        foreach ($tamanhos as $tamanho) {
            Tamanho::create([
                'nome' => $tamanho['nome'],
                'tipo' => $tamanho['tipo'],
            ]);
        }
    }
}
