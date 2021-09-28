<?php

namespace Database\Seeders;

use App\Models\TipoArmazon;
use Illuminate\Database\Seeder;

class TipoArmazonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoArmazon::create([
            'descripcion' => 'Ranurado',
        ]);
        TipoArmazon::create([
            'descripcion' => 'Aro Completo',
        ]);
        TipoArmazon::create([
            'descripcion' => 'Volado',
        ]);
        TipoArmazon::create([
            'descripcion' => 'Acetato',
        ]);
        TipoArmazon::create([
            'descripcion' => 'Metálico',
        ]);
        TipoArmazon::create([
            'descripcion' => 'Flex',
        ]);
    }
}
