<?php

namespace Database\Seeders;

use App\Models\Existencia;
use Illuminate\Database\Seeder;

class ExistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Existencia::factory(40)->create();
    }
}
