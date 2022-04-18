<?php

namespace Database\Seeders;

use App\Models\Administrators;
use Illuminate\Database\Seeder;

class AdministratorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Administrators::where('email', 'kaito@gmail.com')->first();
        $count = Administrators::count();

        if (empty($user)) {

            $admin = Administrators::create([
                'username' => 'kaito',
                'email' => 'kaito@gmail.com',
                'password' => bcrypt('kaito')
            ]);

            $admin->assignRole('Administrator');
        }

        if ($count < 10) {
            Administrators::factory()->count(15)->create()->each(function ($admin) {

                $role = ['Administrator', 'Collaborator'];
                $rand = array_rand($role);
                $admin->assignRole($role[$rand]);
                $admin->update([
                    'role_id' => $rand + 1
                ]);
            });
        }
    }
}
