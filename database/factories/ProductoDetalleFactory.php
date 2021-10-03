<?php

namespace Database\Factories;

use App\Models\ProductoDetalle;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoDetalleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductoDetalle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $producto = 1;
        static $image = 1;

        return [
            'producto_id' => $producto++,
            'image_id' => $image++,
            'color' => $this->faker->colorName(),
            'talla' => $this->faker->randomNumber(2),
            'longitud_varilla' => $this->faker->randomNumber(2),
            'ancho_puente' => $this->faker->randomNumber(2),
            'ancho_total' => $this->faker->randomNumber(2),
            'sku' => $this->faker->isbn10(),
        ];
    }
}
