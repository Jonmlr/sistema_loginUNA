<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call(PermissionsTableSeeder::class);
		$this->call(UsersTableSeeder::class);
		$this->call(TiposequiposTableSeeder::class);		
		$this->call(MarcasequiposTableSeeder::class);
		$this->call(LugarsTableSeeder::class);
		$this->call(Permission_RoleTableSeeder::class);
        //$this->call(UserTableSeeder::class);
    }
}
