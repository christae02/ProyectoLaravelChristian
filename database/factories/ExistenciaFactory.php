<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ExistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lote' => rand(10000, 9999999),
            'fecha_cad' => fake()->dateTimeBetween('+5 months','+10 years'),
            'existencias' => rand (0,10),
            'medicamento_id' => rand(1,50)
            
        ];
    }
}
