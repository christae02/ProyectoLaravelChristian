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
            'mg' => fake()->randomElement(['500','750','250','1000','875/25','250/62.5']),
            'imagen' => fake()->imageUrl(360, 360, 'medicamentos',true,'antibioticos')
        ];
    }
}
