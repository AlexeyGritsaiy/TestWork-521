<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CinemaMovieFactory extends Factory
{
    public function definition():array
    {
        return [
            'cinema_id' => $this->faker->numberBetween(1,10),
            'movie_id' => $this->faker->numberBetween(1,50)
        ];
    }
}
