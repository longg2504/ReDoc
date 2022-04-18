<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post_tags;

class PostTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post_tags::factory(10)->create();
    }
}
