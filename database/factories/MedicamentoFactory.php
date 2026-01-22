<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MedicamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->randomElement(['Amoxicilina','Ceftriaxona','Acido Clavulanico','Ciprofloxacino','Clindamicina','Eritromicina']),
            'presentacion' => fake()->randomElement(['Suspension','IntraMuscular','Tabletas']),
            'imagen' => fake()->imageUrl(360, 360, 'medicamentos',true,'antibioticos')
        ];
    }
}
