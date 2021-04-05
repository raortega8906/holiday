<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
        	'id' => 1,
        	'rol_id' => 1,
            'name' => 'Admin',
            'email' => 'ceiforestudios87@gmail.com',
            'password' => 'Heroku.2021'
        ]);
    }
}
