<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\Useer::factory(),
            'quantite' => $this->faker->numberBetween(1, 5),
        ];
    }
}
