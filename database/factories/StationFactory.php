<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class StationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_of_petrolstation' => $this->faker->word,
            'name_of_road' => $this->faker->word,
              'price' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL) ,
              'quality' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL)
        ];
    }
}
