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
        User::create([
        	'name' => 'jorgearturomolina',
        	'email' => 'jorgearturomolina@example.com',
        	'password' => bcrypt('jorgearturomolina')
        ]);

        factory(User::class, 10)->create();
    }
}
