<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
        	'id' => 1,
            'key' => 'admin',
            'name' => 'Rol Admin',
            'description' => 'Todos los permisos'
        ]);
        Rol::create([
        	'id' => 0,
            'key' => 'employee',
            'name' => 'Rol Employee',
            'description' => 'Permisos de consulta y solicitud'
        ]);
    }
}
