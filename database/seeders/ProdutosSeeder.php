<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Domains\Produto\Models\Produto;
use App\Domains\Produto\Models\Categoria;



class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        /** 
         *  nome
         * descricao
         * preco
         * categoria_id
        */
        $produtos = [
            [
                'nome' => 'Camiseta Premium 1',
                'descricao' => 'Camiseta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 69.9,
                'categoria_id' => 1,
            ],
            [
                'nome' => 'Camiseta Clássico 2',
                'descricao' => 'Camiseta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 79.9,
                'categoria_id' => 1,
            ],
            [
                'nome' => 'Camiseta Essencial 3',
                'descricao' => 'Camiseta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 89.9,
                'categoria_id' => 1,
            ],
            [
                'nome' => 'Camiseta Confort 4',
                'descricao' => 'Camiseta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 99.9,
                'categoria_id' => 1,
            ],
            [
                'nome' => 'Camiseta Urban 5',
                'descricao' => 'Camiseta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 59.9,
                'categoria_id' => 1,
            ],
            [
                'nome' => 'Camiseta Slim 6',
                'descricao' => 'Camiseta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 69.9,
                'categoria_id' => 1,
            ],
            [
                'nome' => 'Camiseta Casual 7',
                'descricao' => 'Camiseta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 79.9,
                'categoria_id' => 1,
            ],
            [
                'nome' => 'Camiseta Moderno 8',
                'descricao' => 'Camiseta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 89.9,
                'categoria_id' => 1,
            ],
            [
                'nome' => 'Camiseta Básico 9',
                'descricao' => 'Camiseta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 99.9,
                'categoria_id' => 1,
            ],
            [
                'nome' => 'Camiseta Fit 10',
                'descricao' => 'Camiseta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 59.9,
                'categoria_id' => 1,
            ],
            [
                'nome' => 'Camiseta Soft 11',
                'descricao' => 'Camiseta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 69.9,
                'categoria_id' => 1,
            ],
            [
                'nome' => 'Camiseta Trend 12',
                'descricao' => 'Camiseta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 79.9,
                'categoria_id' => 1,
            ],
            [
                'nome' => 'Camiseta Plus 13',
                'descricao' => 'Camiseta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 89.9,
                'categoria_id' => 1,
            ],
            [
                'nome' => 'Camiseta Sport 14',
                'descricao' => 'Camiseta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 99.9,
                'categoria_id' => 1,
            ],
            [
                'nome' => 'Camiseta Style 15',
                'descricao' => 'Camiseta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 59.9,
                'categoria_id' => 1,
            ],
            [
                'nome' => 'Calça Premium 1',
                'descricao' => 'Calça de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 159.9,
                'categoria_id' => 2,
            ],
            [
                'nome' => 'Calça Clássico 2',
                'descricao' => 'Calça de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 169.9,
                'categoria_id' => 2,
            ],
            [
                'nome' => 'Calça Essencial 3',
                'descricao' => 'Calça de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 179.9,
                'categoria_id' => 2,
            ],
            [
                'nome' => 'Calça Confort 4',
                'descricao' => 'Calça de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 189.9,
                'categoria_id' => 2,
            ],
            [
                'nome' => 'Calça Urban 5',
                'descricao' => 'Calça de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 149.9,
                'categoria_id' => 2,
            ],
            [
                'nome' => 'Calça Slim 6',
                'descricao' => 'Calça de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 159.9,
                'categoria_id' => 2,
            ],
            [
                'nome' => 'Calça Casual 7',
                'descricao' => 'Calça de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 169.9,
                'categoria_id' => 2,
            ],
            [
                'nome' => 'Calça Moderno 8',
                'descricao' => 'Calça de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 179.9,
                'categoria_id' => 2,
            ],
            [
                'nome' => 'Bermuda Premium 1',
                'descricao' => 'Bermuda de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 109.9,
                'categoria_id' => 3,
            ],
            [
                'nome' => 'Bermuda Clássico 2',
                'descricao' => 'Bermuda de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 119.9,
                'categoria_id' => 3,
            ],
            [
                'nome' => 'Bermuda Essencial 3',
                'descricao' => 'Bermuda de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 129.9,
                'categoria_id' => 3,
            ],
            [
                'nome' => 'Bermuda Confort 4',
                'descricao' => 'Bermuda de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 139.9,
                'categoria_id' => 3,
            ],
            [
                'nome' => 'Bermuda Urban 5',
                'descricao' => 'Bermuda de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 99.9,
                'categoria_id' => 3,
            ],
            [
                'nome' => 'Bermuda Slim 6',
                'descricao' => 'Bermuda de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 109.9,
                'categoria_id' => 3,
            ],
            [
                'nome' => 'Short Premium 1',
                'descricao' => 'Short de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 89.9,
                'categoria_id' => 4,
            ],
            [
                'nome' => 'Short Clássico 2',
                'descricao' => 'Short de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 99.9,
                'categoria_id' => 4,
            ],
            [
                'nome' => 'Short Essencial 3',
                'descricao' => 'Short de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 109.9,
                'categoria_id' => 4,
            ],
            [
                'nome' => 'Short Confort 4',
                'descricao' => 'Short de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 119.9,
                'categoria_id' => 4,
            ],
            [
                'nome' => 'Short Urban 5',
                'descricao' => 'Short de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 79.9,
                'categoria_id' => 4,
            ],
            [
                'nome' => 'Short Slim 6',
                'descricao' => 'Short de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 89.9,
                'categoria_id' => 4,
            ],
            [
                'nome' => 'Jaqueta Premium 1',
                'descricao' => 'Jaqueta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 229.9,
                'categoria_id' => 5,
            ],
            [
                'nome' => 'Jaqueta Clássico 2',
                'descricao' => 'Jaqueta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 239.9,
                'categoria_id' => 5,
            ],
            [
                'nome' => 'Jaqueta Essencial 3',
                'descricao' => 'Jaqueta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 249.9,
                'categoria_id' => 5,
            ],
            [
                'nome' => 'Jaqueta Confort 4',
                'descricao' => 'Jaqueta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 259.9,
                'categoria_id' => 5,
            ],
            [
                'nome' => 'Jaqueta Urban 5',
                'descricao' => 'Jaqueta de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 219.9,
                'categoria_id' => 5,
            ],
            [
                'nome' => 'Moleton Premium 1',
                'descricao' => 'Moleton de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 179.9,
                'categoria_id' => 6,
            ],
            [
                'nome' => 'Moleton Clássico 2',
                'descricao' => 'Moleton de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 189.9,
                'categoria_id' => 6,
            ],
            [
                'nome' => 'Moleton Essencial 3',
                'descricao' => 'Moleton de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 199.9,
                'categoria_id' => 6,
            ],
            [
                'nome' => 'Moleton Confort 4',
                'descricao' => 'Moleton de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 209.9,
                'categoria_id' => 6,
            ],
            [
                'nome' => 'Moleton Urban 5',
                'descricao' => 'Moleton de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 169.9,
                'categoria_id' => 6,
            ],
            [
                'nome' => 'Moleton Slim 6',
                'descricao' => 'Moleton de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 179.9,
                'categoria_id' => 6,
            ],
            [
                'nome' => 'Moleton Casual 7',
                'descricao' => 'Moleton de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 189.9,
                'categoria_id' => 6,
            ],
            [
                'nome' => 'Moleton Moderno 8',
                'descricao' => 'Moleton de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 199.9,
                'categoria_id' => 6,
            ],
            [
                'nome' => 'Vestido Premium 1',
                'descricao' => 'Vestido de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 199.9,
                'categoria_id' => 7,
            ],
            [
                'nome' => 'Vestido Clássico 2',
                'descricao' => 'Vestido de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 209.9,
                'categoria_id' => 7,
            ],
            [
                'nome' => 'Vestido Essencial 3',
                'descricao' => 'Vestido de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 219.9,
                'categoria_id' => 7,
            ],
            [
                'nome' => 'Vestido Confort 4',
                'descricao' => 'Vestido de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 229.9,
                'categoria_id' => 7,
            ],
            [
                'nome' => 'Vestido Urban 5',
                'descricao' => 'Vestido de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 189.9,
                'categoria_id' => 7,
            ],
            [
                'nome' => 'Vestido Slim 6',
                'descricao' => 'Vestido de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 199.9,
                'categoria_id' => 7,
            ],
            [
                'nome' => 'Vestido Casual 7',
                'descricao' => 'Vestido de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 209.9,
                'categoria_id' => 7,
            ],
            [
                'nome' => 'Vestido Moderno 8',
                'descricao' => 'Vestido de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 219.9,
                'categoria_id' => 7,
            ],
            [
                'nome' => 'Saia Premium 1',
                'descricao' => 'Saia de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 129.9,
                'categoria_id' => 8,
            ],
            [
                'nome' => 'Saia Clássico 2',
                'descricao' => 'Saia de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 139.9,
                'categoria_id' => 8,
            ],
            [
                'nome' => 'Saia Essencial 3',
                'descricao' => 'Saia de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 149.9,
                'categoria_id' => 8,
            ],
            [
                'nome' => 'Saia Confort 4',
                'descricao' => 'Saia de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 159.9,
                'categoria_id' => 8,
            ],
            [
                'nome' => 'Saia Urban 5',
                'descricao' => 'Saia de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 119.9,
                'categoria_id' => 8,
            ],
            [
                'nome' => 'Blusa Premium 1',
                'descricao' => 'Blusa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 99.9,
                'categoria_id' => 9,
            ],
            [
                'nome' => 'Blusa Clássico 2',
                'descricao' => 'Blusa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 109.9,
                'categoria_id' => 9,
            ],
            [
                'nome' => 'Blusa Essencial 3',
                'descricao' => 'Blusa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 119.9,
                'categoria_id' => 9,
            ],
            [
                'nome' => 'Blusa Confort 4',
                'descricao' => 'Blusa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 129.9,
                'categoria_id' => 9,
            ],
            [
                'nome' => 'Blusa Urban 5',
                'descricao' => 'Blusa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 89.9,
                'categoria_id' => 9,
            ],
            [
                'nome' => 'Blusa Slim 6',
                'descricao' => 'Blusa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 99.9,
                'categoria_id' => 9,
            ],
            [
                'nome' => 'Blusa Casual 7',
                'descricao' => 'Blusa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 109.9,
                'categoria_id' => 9,
            ],
            [
                'nome' => 'Blusa Moderno 8',
                'descricao' => 'Blusa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 119.9,
                'categoria_id' => 9,
            ],
            [
                'nome' => 'Blusa Básico 9',
                'descricao' => 'Blusa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 129.9,
                'categoria_id' => 9,
            ],
            [
                'nome' => 'Blusa Fit 10',
                'descricao' => 'Blusa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 89.9,
                'categoria_id' => 9,
            ],
            [
                'nome' => 'Regata Premium 1',
                'descricao' => 'Regata de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 59.9,
                'categoria_id' => 10,
            ],
            [
                'nome' => 'Regata Clássico 2',
                'descricao' => 'Regata de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 69.9,
                'categoria_id' => 10,
            ],
            [
                'nome' => 'Regata Essencial 3',
                'descricao' => 'Regata de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 79.9,
                'categoria_id' => 10,
            ],
            [
                'nome' => 'Regata Confort 4',
                'descricao' => 'Regata de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 89.9,
                'categoria_id' => 10,
            ],
            [
                'nome' => 'Regata Urban 5',
                'descricao' => 'Regata de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 49.9,
                'categoria_id' => 10,
            ],
            [
                'nome' => 'Regata Slim 6',
                'descricao' => 'Regata de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 59.9,
                'categoria_id' => 10,
            ],
            [
                'nome' => 'Regata Casual 7',
                'descricao' => 'Regata de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 69.9,
                'categoria_id' => 10,
            ],
            [
                'nome' => 'Regata Moderno 8',
                'descricao' => 'Regata de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 79.9,
                'categoria_id' => 10,
            ],
            [
                'nome' => 'Camisa Premium 1',
                'descricao' => 'Camisa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 169.9,
                'categoria_id' => 11,
            ],
            [
                'nome' => 'Camisa Clássico 2',
                'descricao' => 'Camisa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 179.9,
                'categoria_id' => 11,
            ],
            [
                'nome' => 'Camisa Essencial 3',
                'descricao' => 'Camisa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 189.9,
                'categoria_id' => 11,
            ],
            [
                'nome' => 'Camisa Confort 4',
                'descricao' => 'Camisa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 199.9,
                'categoria_id' => 11,
            ],
            [
                'nome' => 'Camisa Urban 5',
                'descricao' => 'Camisa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 159.9,
                'categoria_id' => 11,
            ],
            [
                'nome' => 'Camisa Slim 6',
                'descricao' => 'Camisa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 169.9,
                'categoria_id' => 11,
            ],
            [
                'nome' => 'Camisa Casual 7',
                'descricao' => 'Camisa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 179.9,
                'categoria_id' => 11,
            ],
            [
                'nome' => 'Camisa Moderno 8',
                'descricao' => 'Camisa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 189.9,
                'categoria_id' => 11,
            ],
            [
                'nome' => 'Têni Premium 1',
                'descricao' => 'Têni de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 259.9,
                'categoria_id' => 12,
            ],
            [
                'nome' => 'Têni Clássico 2',
                'descricao' => 'Têni de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 269.9,
                'categoria_id' => 12,
            ],
            [
                'nome' => 'Têni Essencial 3',
                'descricao' => 'Têni de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 279.9,
                'categoria_id' => 12,
            ],
            [
                'nome' => 'Têni Confort 4',
                'descricao' => 'Têni de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 289.9,
                'categoria_id' => 12,
            ],
            [
                'nome' => 'Têni Urban 5',
                'descricao' => 'Têni de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 249.9,
                'categoria_id' => 12,
            ],
            [
                'nome' => 'Sapato Premium 1',
                'descricao' => 'Sapato de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 309.9,
                'categoria_id' => 13,
            ],
            [
                'nome' => 'Sapato Clássico 2',
                'descricao' => 'Sapato de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 319.9,
                'categoria_id' => 13,
            ],
            [
                'nome' => 'Sapato Essencial 3',
                'descricao' => 'Sapato de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 329.9,
                'categoria_id' => 13,
            ],
            [
                'nome' => 'Sandália Premium 1',
                'descricao' => 'Sandália de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 119.9,
                'categoria_id' => 14,
            ],
            [
                'nome' => 'Sandália Clássico 2',
                'descricao' => 'Sandália de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 129.9,
                'categoria_id' => 14,
            ],
            [
                'nome' => 'Sandália Essencial 3',
                'descricao' => 'Sandália de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 139.9,
                'categoria_id' => 14,
            ],
            [
                'nome' => 'Sandália Confort 4',
                'descricao' => 'Sandália de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 149.9,
                'categoria_id' => 14,
            ],
            [
                'nome' => 'Chinelo Premium 1',
                'descricao' => 'Chinelo de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 49.9,
                'categoria_id' => 15,
            ],
            [
                'nome' => 'Chinelo Clássico 2',
                'descricao' => 'Chinelo de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 59.9,
                'categoria_id' => 15,
            ],
            [
                'nome' => 'Chinelo Essencial 3',
                'descricao' => 'Chinelo de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 69.9,
                'categoria_id' => 15,
            ],
            [
                'nome' => 'Boné Premium 1',
                'descricao' => 'Boné de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 79.9,
                'categoria_id' => 16,
            ],
            [
                'nome' => 'Boné Clássico 2',
                'descricao' => 'Boné de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 89.9,
                'categoria_id' => 16,
            ],
            [
                'nome' => 'Boné Essencial 3',
                'descricao' => 'Boné de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 99.9,
                'categoria_id' => 16,
            ],
            [
                'nome' => 'Boné Confort 4',
                'descricao' => 'Boné de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 109.9,
                'categoria_id' => 16,
            ],
            [
                'nome' => 'Boné Urban 5',
                'descricao' => 'Boné de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 69.9,
                'categoria_id' => 16,
            ],
            [
                'nome' => 'Bolsa Premium 1',
                'descricao' => 'Bolsa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 149.9,
                'categoria_id' => 17,
            ],
            [
                'nome' => 'Bolsa Clássico 2',
                'descricao' => 'Bolsa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 159.9,
                'categoria_id' => 17,
            ],
            [
                'nome' => 'Bolsa Essencial 3',
                'descricao' => 'Bolsa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 169.9,
                'categoria_id' => 17,
            ],
            [
                'nome' => 'Bolsa Confort 4',
                'descricao' => 'Bolsa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 179.9,
                'categoria_id' => 17,
            ],
            [
                'nome' => 'Bolsa Urban 5',
                'descricao' => 'Bolsa de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 139.9,
                'categoria_id' => 17,
            ],
            [
                'nome' => 'Mochila Premium 1',
                'descricao' => 'Mochila de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 209.9,
                'categoria_id' => 18,
            ],
            [
                'nome' => 'Mochila Clássico 2',
                'descricao' => 'Mochila de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 219.9,
                'categoria_id' => 18,
            ],
            [
                'nome' => 'Mochila Essencial 3',
                'descricao' => 'Mochila de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 229.9,
                'categoria_id' => 18,
            ],
            [
                'nome' => 'Acessório Premium 1',
                'descricao' => 'Acessório de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 39.9,
                'categoria_id' => 19,
            ],
            [
                'nome' => 'Acessório Clássico 2',
                'descricao' => 'Acessório de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 49.9,
                'categoria_id' => 19,
            ],
            [
                'nome' => 'Acessório Essencial 3',
                'descricao' => 'Acessório de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 59.9,
                'categoria_id' => 19,
            ],
            [
                'nome' => 'Acessório Confort 4',
                'descricao' => 'Acessório de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 69.9,
                'categoria_id' => 19,
            ],
            [
                'nome' => 'Acessório Urban 5',
                'descricao' => 'Acessório de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 29.9,
                'categoria_id' => 19,
            ],
            [
                'nome' => 'Acessório Slim 6',
                'descricao' => 'Acessório de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 39.9,
                'categoria_id' => 19,
            ],
            [
                'nome' => 'Acessório Casual 7',
                'descricao' => 'Acessório de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 49.9,
                'categoria_id' => 19,
            ],
            [
                'nome' => 'Acessório Moderno 8',
                'descricao' => 'Acessório de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 59.9,
                'categoria_id' => 19,
            ],
            [
                'nome' => 'Acessório Básico 9',
                'descricao' => 'Acessório de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 69.9,
                'categoria_id' => 19,
            ],
            [
                'nome' => 'Acessório Fit 10',
                'descricao' => 'Acessório de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 29.9,
                'categoria_id' => 19,
            ],
            [
                'nome' => 'Esportivo Premium 1',
                'descricao' => 'Esportivo de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 139.9,
                'categoria_id' => 20,
            ],
            [
                'nome' => 'Esportivo Clássico 2',
                'descricao' => 'Esportivo de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 149.9,
                'categoria_id' => 20,
            ],
            [
                'nome' => 'Esportivo Essencial 3',
                'descricao' => 'Esportivo de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 159.9,
                'categoria_id' => 20,
            ],
            [
                'nome' => 'Esportivo Confort 4',
                'descricao' => 'Esportivo de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 169.9,
                'categoria_id' => 20,
            ],
            [
                'nome' => 'Esportivo Urban 5',
                'descricao' => 'Esportivo de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 129.9,
                'categoria_id' => 20,
            ],
            [
                'nome' => 'Esportivo Slim 6',
                'descricao' => 'Esportivo de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 139.9,
                'categoria_id' => 20,
            ],
            [
                'nome' => 'Esportivo Casual 7',
                'descricao' => 'Esportivo de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 149.9,
                'categoria_id' => 20,
            ],
            [
                'nome' => 'Esportivo Moderno 8',
                'descricao' => 'Esportivo de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 159.9,
                'categoria_id' => 20,
            ],
            [
                'nome' => 'Esportivo Básico 9',
                'descricao' => 'Esportivo de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 169.9,
                'categoria_id' => 20,
            ],
            [
                'nome' => 'Esportivo Fit 10',
                'descricao' => 'Esportivo de alta qualidade, confortável e ideal para o dia a dia.',
                'preco' => 129.9,
                'categoria_id' => 20,
            ],
        ];

        foreach ($produtos as $produto) {
            try {
                Produto::create([
                    'nome' => $produto['nome'],
                    'descricao' => $produto['descricao'],
                    'preco' => $produto['preco'],
                    'slug' => Str::slug($produto['nome']),
                    'categoria_id' => $produto['categoria_id'],
                ]);
            } catch (\Throwable $e) {
                dd($produto, $e->getMessage());
            }
        }
    }
}
