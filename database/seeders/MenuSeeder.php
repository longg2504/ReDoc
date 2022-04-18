<?php

namespace Database\Seeders;

use App\Models\menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        menu::create([
            'name' => 'GameFi',
            'sort' => 1,
            'link' => '/gamefi',
        ]);

        menu::create([
            'name' => 'Tracking',
            'sort' => 2,
            'link' => '/tracking',
        ]);

        menu::create([
            'name' => 'BotTrade',
            'sort' => 3,
            'is_coming_soon' => true,
            'link' => '/bottrade',
        ]);

        menu::create([
            'name' => 'About',
            'sort' => 4,
            'link' => '/about',
        ]);

        menu::create([
            'name' => 'Contact',
            'sort' => 5,
            'link' => '/contact',
        ]);

        // menu::create([
        //     'name' => 'Privacy Policy',
        //     'sort' => 6,
        //     'link' => '/privacy-policy',
        // ]);

        // menu::create([
        //     'name' => 'Terms of Service',
        //     'sort' => 7,
        //     'link' => '/terms-of-service',
        // ]);

        // menu::create([
        //     'name' => 'FAQ',
        //     'sort' => 8,
        //     'link' => '/faq',
        // ]);
    }
}
