<?php

namespace Database\Seeders;

use App\Models\Forma;
use Illuminate\Database\Seeder;

class FormaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Forma::create([
            'descripcion' => 'Cuadrada'
        ]);
        Forma::create([
            'descripcion' => 'Redondo'
        ]);
        Forma::create([
            'descripcion' => 'Aviador'
        ]);
        Forma::create([
            'descripcion' => 'Lágrima'
        ]);
        Forma::create([
            'descripcion' => 'Niños'
        ]);
    }
}
