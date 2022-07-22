<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DateFormattedModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'dateAttribute' => $this->faker->dateTimeBetween('2022-07-03', '2022-07-05'), // fails
            // 'dateAttribute' => \Carbon\Carbon::parse('2022-07-04'), // fails
            // 'dateAttribute' => '2022-07-04', // succeeds
        ];
    }
}
