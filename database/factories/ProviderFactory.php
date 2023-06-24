<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rut' =>fake()->numberBetween(3000000,20000000), 
            'giro'=>fake()->randomElement(['restaurant','servicios informaticos','productora','S/Giro',null]),
            'direccion'=>fake()->address(),
            'razon_social'=>fake()->company(),           
            // 'apellido_paterno' => fake()->lastName(),
            // 'apellido_Materno' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),  
            'tipo_empresa'=>fake()->randomElement(['E.I.R.L','SPA']),          
        ];
        
    }
}
