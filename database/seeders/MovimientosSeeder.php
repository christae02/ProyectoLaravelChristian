<?php

namespace Database\Seeders;

use App\Models\Movimientos;
use Illuminate\Database\Seeder;

class MovimientosSeeder extends Seeder
{
    public function run(): void
    {
        Movimientos::factory(50)->create();
    }
}
