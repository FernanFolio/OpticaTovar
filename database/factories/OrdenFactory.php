<?php

namespace Database\Factories;

use App\Models\Orden;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Orden::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 4),
            'paypal_orderid' => Str::random(8),
            'type' => $this->faker->numberBetween(1, 2) == 1 ? 'paypal' : 'store',
            'created_at' => $this->faker->dateTimeBetween('-8 months')
        ];
    }
}
