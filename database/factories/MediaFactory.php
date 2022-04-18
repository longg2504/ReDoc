<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'path' => 'test',
            'name' => $this->faker->image('public/storage/images/test/', 400, 400, null, false),
            'type' => 0
        ];
    }
}
