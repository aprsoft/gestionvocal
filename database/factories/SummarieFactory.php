<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SummarieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' =>fake()->numberBetween(1,50), 
            'folio'=>fake()->randomNumber(4,false),
            'detalle'=>fake()->randomElement(['FALABELLA','PROVIDA','SEGUROS','RED SALUD']),
            'typedocument_id'=>2,
            'estado_documento'=>'VIGENTE',           
            'condicion_documento'=>fake()->randomElement(['PAGADO','PENDIENTE','MOROSO']),
            'neto' =>fake()->randomNumber(6, true),
            'typedocument_id' =>fake()->numberBetween(1, 3)
                      
        ];
    }
}
