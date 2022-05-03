<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categories;
use App\Models\Media;

class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Categories::all()->random()->id,
            'title' => $this->faker->name,
            'content' => $this->faker->text,
            'media_id' => Media::all()->random()->id,
        ];
    }
}
