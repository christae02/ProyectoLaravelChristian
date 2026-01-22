<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MovimientosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo' => fake()->randomElement(['entrada','salida']),
            'cantidad' => rand(1,30),
            'fecha' => date('Y_m_d'),
            'receta' => rand(100000,9999999),
            'existencia_anterior' => rand(0,50),
            'nueva_existencia' => rand(0,50),
            'existencias_id' => rand(1,20),
            'doctor_id' =>rand(1,10)
        ];
    }
}
