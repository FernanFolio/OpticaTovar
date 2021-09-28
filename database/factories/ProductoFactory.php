<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'precio' => $this->faker->randomFloat(2, 799, 4200),
            'descripcion' => $this->faker->sentence(10),
            'tipo_armazon_id' => $this->faker->numberBetween(1, 6),
            'marca_id' => $this->faker->numberBetween(1, 30),
            'categoria_id' => $this->faker->numberBetween(1, 4),
            'forma_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
