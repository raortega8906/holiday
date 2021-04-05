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
        	'rol_id' => 1,
            'name' => 'Rafael A. Ortega',
            'mail' => 'ceiforestudios87@gmail.com',
            'password' => 'Heroku.2021'
        ]);
    }
}
