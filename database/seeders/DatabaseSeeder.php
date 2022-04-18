<?php

namespace Database\Seeders;

use App\Models\Chats;
use App\Models\Discounts;
use App\Models\GamesCategories;
use App\Models\Hires;
use App\Models\Stars;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            UsersSeeder::class,
            AdministratorsSeeder::class,
            MediaSeeder::class,
            CategoriesSeeder::class,
            SettingsSeeder::class,
            DrugstoresSeeder::class,
            MedicinesSeeder::class,
            DiseasesSeeder::class,
            SymptomsSeeder::class,
            DiseaseSymptomsSeeder::class,
            PrescriptionsSeeder::class,
            PostsSeeder::class,
            TagsSeeder::class,
            PostTagsSeeder::class,
        ]);
    }
}
