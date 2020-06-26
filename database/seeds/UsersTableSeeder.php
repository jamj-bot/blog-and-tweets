<?php

use App\User;
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
        //Creando un usuario con datos reales
        User::create([
        	'name' => 'jorgearturomolina',
            'username' => 'arturown',
        	'email' => 'jorgearturomolina@example.com',
        	'password' => bcrypt('jorgearturomolina')
        ]);

        //Creando 10 usuarios ficticios con la UserFactory
        factory(User::class, 10)->create();
    }
}
