<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'setting_key' => 'BANNER_IMAGE',
                'setting_value' => '1',
                'type' => Settings::INPUT_MEDIA,
            ],
            [
                'setting_key' => 'LOGO',
                'setting_value' => '2',
                'type' => Settings::INPUT_MEDIA,
            ],
        ];

        foreach ($settings as $setting) {
            Settings::create($setting);
        }
    }
}
