<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\Contents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::factory()->count(10)->create();
    }
}
