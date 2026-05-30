<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Domains\Produto\Models\Produto;
use App\Domains\Produto\Models\Categoria;



class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $produtos = [
            ['Camiseta Básica Preta', 'Camiseta 100% algodão, confortável para o dia a dia.', 59.90, 50, true],
            ['Camiseta Básica Branca', 'Clássica e versátil, combina com qualquer look.', 59.90, 30, false],
            ['Camiseta Estampada Street', 'Estilo urbano com estampa moderna.', 79.90, 20, true],
            ['Camiseta Oversized Bege', 'Modelagem larga e tecido premium.', 89.90, 15, false],
            ['Regata Fitness Dry Fit', 'Ideal para treinos intensos.', 49.90, 40, false],

            ['Moletom Preto Capuz', 'Moletom quente com capuz ajustável.', 149.90, 25, true],
            ['Moletom Branco Oversized', 'Conforto e estilo em peça única.', 159.90, 18, true],
            ['Moletom Cinza Básico', 'Essencial para dias frios.', 139.90, 22, false],
            ['Moletom Estampado Urbano', 'Design moderno com estampa frontal.', 169.90, 12, true],

            ['Jaqueta Corta Vento', 'Leve e resistente contra vento.', 199.90, 10, true],
            ['Jaqueta Jeans Azul', 'Clássica e durável.', 189.90, 14, false],
            ['Jaqueta Bomber Preta', 'Estilo urbano com acabamento premium.', 219.90, 8, true],

            ['Calça Jeans Slim', 'Ajuste moderno e confortável.', 129.90, 20, false],
            ['Calça Moletom Cinza', 'Perfeita para conforto diário.', 119.90, 25, false],
            ['Calça Cargo Verde', 'Estilo utilitário com bolsos extras.', 149.90, 16, true],

            ['Shorts Esportivo Preto', 'Leve e respirável.', 69.90, 35, false],
            ['Shorts Moletom Cinza', 'Conforto total para o dia a dia.', 79.90, 28, false],

            ['Polo Azul Marinho', 'Elegância casual.', 99.90, 18, false],
            ['Polo Branca Clássica', 'Visual limpo e sofisticado.', 99.90, 17, false],

            ['Camisa Social Branca', 'Ideal para ocasiões formais.', 139.90, 12, false],
            ['Camisa Social Azul Claro', 'Elegante e confortável.', 139.90, 13, false],

            ['Tênis Casual Branco', 'Versátil para qualquer look.', 199.90, 9, true],
            ['Tênis Esportivo Preto', 'Performance e conforto.', 229.90, 7, true],

            ['Boné Preto Básico', 'Acessório essencial.', 49.90, 40, false],
            ['Boné Aba Curva Branco', 'Estilo casual.', 49.90, 38, false],

            ['Meia Esportiva Kit 3', 'Conforto para o dia inteiro.', 29.90, 50, false],
            ['Cinto Couro Preto', 'Durável e elegante.', 79.90, 22, false],

            ['Jaqueta Puffer Inverno', 'Máxima proteção contra frio.', 299.90, 6, true],
            ['Blusa Manga Longa Preta', 'Versátil e confortável.', 89.90, 20, false],

            ['Camiseta Minimalista Cinza', 'Design clean e moderno.', 69.90, 27, false],
            ['Camiseta Vintage Lavada', 'Visual retrô estiloso.', 89.90, 15, true],

            ['Moletom Tie Dye', 'Estampa diferenciada.', 179.90, 10, true],
            ['Calça Jogger Preta', 'Ajuste moderno e confortável.', 129.90, 19, false],

            ['Jaqueta Couro Sintético', 'Estilo marcante.', 249.90, 8, true],
            ['Regata Básica Branca', 'Leve e simples.', 39.90, 45, false],

            ['Camiseta Tech Dry', 'Alta performance esportiva.', 79.90, 21, true],
            ['Shorts Running Pro', 'Desenvolvido para corrida.', 89.90, 14, true],

            ['Moletom Zíper Preto', 'Praticidade e estilo.', 159.90, 11, false],
            ['Calça Jeans Reta Azul', 'Clássico atemporal.', 139.90, 16, false],
        ];

        $categorias = Categoria::pluck('id', 'slug');

        foreach ($produtos as $p) {
            $nome = strtolower($p[0]);
            switch (true) {
                case (str_contains($nome, 'camiseta')):
                    $categoria = $categorias['camisetas'];
                    break;

                case str_contains($nome, 'moletom'):
                    $categoria = $categorias['moletons'];
                    break;

                case str_contains($nome, 'calça'):
                    $categoria = $categorias['calcas'];
                    break;

                case str_contains($nome, 'jaqueta'):
                    $categoria = $categorias['jaquetas'];
                    break;

                case str_contains($nome, 'regata'):
                    $categoria = $categorias['regatas'];
                    break;

                case str_contains($nome, 'camisa') || str_contains($nome, 'polo'):
                    $categoria = $categorias['camisas'];
                    break;
                
                default:
                    $categoria = $categorias['acessorios'];
                    break;
            }

            Produto::create([
                'nome' => $p[0],
                'descricao' => $p[1],
                'preco' => $p[2],
                'estoque' => $p[3],
                'destaque' => $p[4],
                'slug' => Str::slug($p[0]),
                'categoria_id' => $categoria,
            ]);
        }
    }
}
