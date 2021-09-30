<?php

namespace Database\Seeders;

use App\Models\Orden;
use Illuminate\Database\Seeder;

class OrdenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Orden::factory(10)->create();

        $ordenes = Orden::all();

        foreach ($ordenes as $orden) {
            $numProductos = random_int(1, 5);

            $productos = [];
            for ($i = 0; $i < $numProductos; $i++) {
                $id = random_int(1, 200);
                $productos[$id] = ['cantidad' => random_int(1, 6)];
            }

            $orden->productos()->attach($productos);
        }
    }
}
