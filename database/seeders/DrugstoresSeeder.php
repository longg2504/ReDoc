<?php

namespace Database\Seeders;

use App\Models\Drugstores;
use Illuminate\Database\Seeder;

class DrugstoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Drugstores::factory()->count(10)->create();
    }
}
