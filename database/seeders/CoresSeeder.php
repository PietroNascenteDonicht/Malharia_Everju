<?php

namespace Database\Seeders;

use App\Domains\Cor\Models\Cor;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cores = [
            [ 
                'nome' => 'Preto', 
                'hex' => '#000000' 
            ],
            [ 
                'nome' => 'Branco', 
                'hex' => '#FFFFFF' 
            ],
            [ 
                'nome' => 'Cinza', 
                'hex' => '#808080' 
            ],
            [ 
                'nome' => 'Cinza Claro', 
                'hex' => '#D3D3D3' 
            ],
            [ 
                'nome' => 'Vermelho', 
                'hex' => '#FF0000' 
            ],
            [ 
                'nome' => 'Vinho', 
                'hex' => '#800020' 
            ],
            [ 
                'nome' => 'Azul', 
                'hex' => '#0000FF' 
            ],
            [ 
                'nome' => 'Azul Marinho', 
                'hex' => '#000080' 
            ],
            [ 
                'nome' => 'Azul Claro', 
                'hex' => '#87CEEB' 
            ],
            [ 
                'nome' => 'Verde', 
                'hex' => '#008000' 
            ],
            [ 
                'nome' => 'Verde Limão', 
                'hex' => '#32CD32' 
            ],
            [ 
                'nome' => 'Verde Militar', 
                'hex' => '#4B5320' 
            ],
            [ 
                'nome' => 'Amarelo', 
                'hex' => '#FFFF00' 
            ],
            [ 
                'nome' => 'Laranja', 
                'hex' => '#FFA500' 
            ],
            [ 
                'nome' => 'Rosa', 
                'hex' => '#FFC0CB' 
            ],
            [ 
                'nome' => 'Roxo', 
                'hex' => '#800080' 
            ],
            [ 
                'nome' => 'Lilás', 
                'hex' => '#C8A2C8' 
            ],
            [ 
                'nome' => 'Marrom', 
                'hex' => '#8B4513' 
            ],
            [ 
                'nome' => 'Bege', 
                'hex' => '#F5F5DC' 
            ],
            [ 
                'nome' => 'Caqui', 
                'hex' => '#C3B091' 
            ],
            [ 
                'nome' => 'Creme', 
                'hex' => '#FFFDD0' 
            ],
            [ 
                'nome' => 'Turquesa', 
                'hex' => '#40E0D0' 
            ],
            [ 
                'nome' => 'Dourado', 
                'hex' => '#FFD700' 
            ],
            [ 
                'nome' => 'Prata', 
                'hex' => '#C0C0C0'
            ]
        ];

        foreach ($cores as $cor) {
            Cor::create([
                'nome' => $cor['nome'],
                'hex' => $cor['hex']
            ]);
        }
    }
}
