<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Media;

class DiseasesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name,
            "age" => $this->faker->randomDigit,
            "media_id" => Media::all()->random()->id
        ];
    }
}
