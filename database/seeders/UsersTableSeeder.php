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
            'rol_id' => '1',
            'name' => 'Admin',
            'email' => 'ceiforestudios87@gmail.com',
            'password' => Hash::make('Heroku.2021')
        ];

        User::create($user1);
    }

    // Random generate ID
    function generateTokenID($length = 9) {
        $characters = '123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
