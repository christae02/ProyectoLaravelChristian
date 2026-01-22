<?php

namespace Database\Seeders;

use App\Models\Direcciones;
use Illuminate\Database\Seeder;

class DireccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Direcciones::factory(15)->create();
    }
}
