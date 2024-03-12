<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TrainFactory extends Factory
{

    public function definition(): array
    {
        return [
            'company' => fake()->company(),
            'departure_station' => fake()->city() . ' Station',
            'arrival_station' => fake()->city() . ' Station',
            'departure_time' => fake()->time(),
            'arrival_time' => fake()->time(),
            'departure_date' => fake()->dateTimeThisMonth(),
            'train_code' => fake()->randomNumber(4, true),
            'carriages_number' => fake()->randomDigitNotNull(),
            'is_delayed' => fake()->boolean(),
            'is_cancelled' => fake()->boolean()
        ];
    }
}
