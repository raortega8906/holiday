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
        $id = $this->generateTokenID();
        $user1 = [
            'id' => $id,
            'rol_id' => '2',
            'name' => 'Admin',
            'email' => 'ceiforestudios@gmail.com',
            'password' => Hash::make('Heroku.2021')
        ];

        User::create($user1);
    }
}
