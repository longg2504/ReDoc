<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Diseases;
use App\Models\Symptoms;

class Disease_symptomsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "disease_id" => Diseases::all()->random()->id,
            "symptom_id" => Symptoms::all()->random()->id
        ];
    }
}
