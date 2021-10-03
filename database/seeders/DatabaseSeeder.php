<?php

namespace Database\Seeders;

use App\Models\Inventario;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\ProductoDetalle;
use App\Models\Proveedor;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UserSeeder::class);
        Marca::factory(30)->create();
        $this->call(CategoriaSeeder::class);
        $this->call(TipoArmazonSeeder::class);
        $this->call(FormaSeeder::class);
        Producto::factory(200)->create();
        ProductoDetalle::factory(200)->create();
        Inventario::factory(200)->create();
        $this->call(OrdenSeeder::class);
        Proveedor::factory(10)->create();
    }
}
