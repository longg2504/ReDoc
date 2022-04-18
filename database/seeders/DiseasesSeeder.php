<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Diseases;

class DiseasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Diseases::factory(10)->create();
    }
}
