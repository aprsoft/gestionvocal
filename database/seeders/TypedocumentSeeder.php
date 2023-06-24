<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypedocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('typedocuments')->insert([
            [
            'nombre' => 'FACTURA ELECTRONICA',
            'codigo' => 33,
            'tipo' =>'TRIBUTARIO',
            'condicion' => 'INGRESO',
            ],      
            [
                'nombre' => 'FACTURA NO AFECTA O EXENTA ELECTRONICA',
                'codigo' => 33,
                'tipo' =>'TRIBUTARIO',
                'condicion' => 'INGRESO',
            ],
            [
                'nombre' => 'BOLETA ELECTRONICA',
                'codigo' => 39,
                'tipo' =>'TRIBUTARIO',
                'condicion' => 'INGRESO',
            ],
            [
                'nombre' => 'NOTA DE CREDITO ELECTRONICA',
                'codigo' => 61,
                'tipo' =>'TRIBUTARIO',
                'condicion' => 'INGRESO',
            ],
            [
                'nombre' => 'NOTA DEBITO ELECTRONICA',
                'codigo' => 56,
                'tipo' =>'TRIBUTARIO',
                'condicion' => 'INGRESO',
            ],
            [
                'nombre' => 'BOLETA EXENTA ELECTRONICA ',
                'codigo' => 41,
                'tipo' =>'TRIBUTARIO',
                'condicion' => 'INGRESO',
            ]    
        ]);

      
        
    }
}
