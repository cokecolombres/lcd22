<?php

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
        factory(App\User::class, 30)->create();

        App\User::create([
        	'name' => 'Admin',
            'email'=> 'admin@demo.com',
            'role_id' => 1, 
        	'password' => bcrypt('admin123')
        ]);
    }
}
