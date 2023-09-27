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
        ],
        [
            'codigo' => 'Daniel',
            'name' => 'Daniel Torres',
            'email' => 'daniel@redecanopus.com.br',
            'password' => Hash::make('123456'),
            'created_at' => date("Y-m-d H:i:s")
        ],
        [
            'codigo' => 'Tozzi',
            'name' => 'Marcos Tozzi',
            'email' => 'ti2.consorcio@consorciocanopus.com.br',
            'password' => Hash::make('123456'),
            'created_at' => date("Y-m-d H:i:s")
        ],
        [
            'codigo' => 'Victor',
            'name' => 'Victor',
            'email' => 'ti3.consorcio@consorciocanopus.com.br',
            'password' => Hash::make('123456'),
            'created_at' => date("Y-m-d H:i:s")
        ],
        [
            'codigo' => 'Paula',
            'name' => 'Paula Miranda',
            'email' => 'paula@consorciocanopus.com.br',
            'password' => Hash::make('123456'),
            'created_at' => date("Y-m-d H:i:s")
        ],
        [
            'codigo' => 'Mih',
            'name' => 'Michele',
            'email' => 'Michele@consorciocanopus.com.br',
            'password' => Hash::make('123456'),
            'created_at' => date("Y-m-d H:i:s")
        ]
    ]);
    }
}
