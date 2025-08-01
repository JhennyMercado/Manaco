<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categroiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert
        (
         [
            [
                'nombre'=>'calzados de varon',
                'descripcion'=>'calzados de varon',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'nombre'=>'calzados de mujer',
                'descripcion'=>'calzados de mujer',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
         ]
        );

    }
}
