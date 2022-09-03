<?php

namespace Database\Factories;

use App\Models\Trainings;
use Illuminate\Database\Eloquent\Factories\Factory;


class TrainingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * 
     */
    protected $model = Trainings::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(10),
            'price' => $this->faker->numberBetween(100,5000),

        ];
    }
}
