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
            'name' => 'Luiz Henrique Tanaka',
            'email' => 'luizhenrique.tk@hotmail.com',
            'password' => Hash::make('123456'),
            'created_at' => date("Y-m-d H:i:s")
        ],
        [
            'codigo' => 'Jamilton',
            'name' => 'Jamilton Agripino',
            'email' => 'jamilton@consorciocanopus.com.br',
            'password' => Hash::make('123456'),
            'created_at' => date("Y-m-d H:i:s")
        ],
        [
            'codigo' => 'Brino',
            'name' => 'Luiz Brino',
            'email' => 'brino@redecanopus.com.br',
            'password' => Hash::make('123456'),
            'created_at' => date("Y-m-d H:i:s")
        ]
    ]);
    }
}
