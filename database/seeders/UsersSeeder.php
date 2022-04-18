<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::where('email', 'test@gmail.com')->first();
        $count = User::count();

        if (empty($user)) {

            User::create([
                'username' => 'test',
                'email' => 'test@gmail.com',
                'password' => bcrypt('kaito')
            ]);
        }

        if ($count < 10) {
            User::factory()->count(10)->create();
        }
    }
}
