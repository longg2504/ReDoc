<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Media;

class MedicinesFactory extends Factory
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
            "price" => $this->faker->randomFloat(2, 0, 100),
            "media_id" => Media::all()->random()->id
        ];
    }
}
