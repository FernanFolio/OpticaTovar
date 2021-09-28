<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'descripcion' => 'Lentes oftálmicos',
        ]);

        Categoria::create([
            'descripcion' => 'Lentes de Sol',
        ]);

        Categoria::create([
            'descripcion' => 'Lentes de Seguridad',
        ]);

        Categoria::create([
            'descripcion' => 'Accesorios',
        ]);
    }
}
