<?php

namespace Database\Seeders;

use App\Domains\Produto\Models\Cor;
use App\Domains\Produto\Models\Produto;
use App\Domains\Produto\Models\Tamanho;
use App\Domains\Produto\Models\ProdutoVariacao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProdutoVariacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produtos = Produto::all();
        $cores = Cor::all();
        $tamanhos = Tamanho::all();

        foreach($produtos as $produto){
            foreach($cores as $cor){
                foreach($tamanhos as $tamanho){
                    // ex de sku ->> CAM-4-VERMELHO-XG
                    $sku = Str::upper(
                        Str::substr(Str::slug($produto->nome), 0, 3) 
                        . '-' . $produto->id 
                        . '-' . Str::slug($cor->nome) 
                        . '-' . Str::slug($tamanho->nome)
                    );
                    
                    ProdutoVariacao::create([
                        'produto_id' => $produto->id,
                        'cor_id' => $cor->id,
                        'tamanho_id' => $tamanho->id,
                        'sku' => $sku,
                        'estoque' => rand(5, 200),
                    ]);
                }
            }
        }
    }
}
