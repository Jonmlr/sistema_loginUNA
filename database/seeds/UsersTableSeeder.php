<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use SistemaInventario\User;
use SistemaInventario\Role_User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SistemaInventario\User::class, 20)->create();

		User::create([
        	'name' => 'Víctor',
        	'lastname' => 'Lara',
        	'email' => 'isjonmlr@hotmail.com',
			'password' => bcrypt('123456'),
			'cedula' => '25510149',
        	'lastname' => 'Lara',
        	'slug' => '25510149',
        ]);
		
		Role_User::create([
        	'role_id' => '1',
        	'user_id' => '21',
        ]);
		

        Role::create([
        	'name' => 'Administrador',
        	'slug' => 'admin',
        	'special' => 'all-access',
        ]);

        Role::create([
        	'name' => 'Técnico',
        	'slug' => 'tecnic',
        ]);

        Role::create([
        	'name' => 'Empleado',
        	'slug' => 'emple',
        ]);

    }
}