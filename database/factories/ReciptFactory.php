<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shows>
 */
class ReciptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Station_name' => $this->faker->word,
            'location' => $this->faker->word,
            'price' => $this->faker->numberBetween(20,120),
            'date' => $this->faker->date()
        ];
    }
}
