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
        DB::table('clientes')->insert
        (
         [
            [
                'nombre'=>'Jhenny',
                'apellidos'=>'Mercado Arce',
                'direccion'=>'Zona 3 Chorros',
                'celular'=>'76757675',
                'nit'=>'67543',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'nombre'=>'Carlos',
                'apellidos'=>'Tacco Terrazas',
                'direccion'=>'San Lorenzo',
                'celular'=>'76765456',
                'nit'=>'98678',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
         ]
        );
    }
}
