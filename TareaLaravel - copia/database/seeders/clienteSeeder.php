<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cliente')->insert([[
            'nombre' => 'Isa',
            'apellido' => 'Villagran',
            'email' => 'isa@gmail.com',
            'telefono' => '1234567890'
        ],
        [
            'nombre' => 'Juan',
            'apellido' => 'Perez',
            'email' => 'juan@gmail.com',
            'telefono' => '9876543210'
        ],
        [
            'nombre' => 'Pedro',
            'apellido' => 'Elizalde',
            'email' => 'pedro@gmail.com',
            'telefono' => '1111111111'
        ]
    ]);
    }
}
