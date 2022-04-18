<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Symptoms;

class SymptomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Symptoms::factory(10)->create();
    }
}
