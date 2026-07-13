<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Domains\Usuario\Models\Usuario as ModelsUsuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Usuario extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsUsuario::create([
            'nome' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('!@pietro#$'),
            'is_admin' => true,
        ]);
    }
}
