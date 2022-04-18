<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prescriptions;

class PrescriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prescriptions::factory(10)->create();
    }
}
