<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Posts;
use App\Models\Tags;

class Post_tagsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "post_id" => Posts::all()->random()->id,
            "tag_id" => Tags::all()->random()->id,
        ];
    }
}
