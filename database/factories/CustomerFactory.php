<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customer>
 */
class CustomerFactory extends Factory
{


     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

   

    public function definition(): array
    {
        return [
            'rut' =>fake()->unique()->numberBetween(3000000,20000000), 
            'giro'=>fake()->randomElement(['restaurant','servicios informaticos','productora','S/Giro',null]),
            'direccion'=>fake()->address(),
            'nombres'=>fake()->name(),           
            'apellido_paterno' => fake()->lastName(),
            'apellido_Materno' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'comuna' => fake()->state(),
            'ciudad' => fake()->city(),
            'telefono_fijo' => fake()->phoneNumber(),
            'telefono_movil' => fake()->phoneNumber(),
          
            'tipo'=>fake()->randomElement(['Socio','Cliente']),            
        ];
    }
}

