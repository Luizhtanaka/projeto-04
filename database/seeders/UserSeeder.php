<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([[
            'codigo' => 'Tanaka',
            'nivel_acesso' => 'S',
            'name' => 'Luiz Henrique Tanaka',
            'email' => 'luizhenrique.tk@hotmail.com',
            'password' => Hash::make('123456'),
        ],
        [
            'codigo' => 'Jamilton',
            'nivel_acesso' => 'S',
            'name' => 'Jamilton Agripino',
            'email' => 'jamilton@consorciocanopus.com.br',
            'password' => Hash::make('123456'),
        ],
        [
            'codigo' => 'Brino',
            'nivel_acesso' => 'N',
            'name' => 'Luiz Brino',
            'email' => 'brino@redecanopus.com.br',
            'password' => Hash::make('123456'),
        ]
    ]);
    }
}
