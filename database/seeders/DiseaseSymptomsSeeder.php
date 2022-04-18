<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Disease_symptoms;

class DiseaseSymptomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $diseases = \App\Models\Diseases::all();
        // $symptoms = \App\Models\Symptoms::all();

        // foreach ($diseases as $disease) {
        //     $disease->symptoms()->attach(
        //         $symptoms->random(rand(1, 3))->pluck('id')->toArray()
        //     );
        // }
        Disease_symptoms::factory(10)->create();
    }
}
