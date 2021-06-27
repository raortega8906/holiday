<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'rol_id' => 1
        ]);

    //     User::create([
    //         'name' => 'Employee',
    //         'email' => 'user@user.com',
    //         'password' => bcrypt('password'),
    //         'rol_id' => 2
    //     ]);
    
    }
}
