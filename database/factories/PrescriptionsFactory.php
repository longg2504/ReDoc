<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Diseases;
use App\Models\Medicines;

class PrescriptionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'disease_id' => Diseases::all()->random()->id,
            'medicine_id' => Medicines::all()->random()->id,
            'age' => $this->faker->randomDigit,
            'amount' => $this->faker->randomDigit,
            'dosage' => $this->faker->randomDigit
        ];
    }
}
