<?php

namespace Database\Seeders;

use App\Models\Medicamento;
use Illuminate\Database\Seeder;

class MedicamentoSeeder extends Seeder
{
    public function run(): void
    {
        Medicamento::factory(50)->create();
    }
}

