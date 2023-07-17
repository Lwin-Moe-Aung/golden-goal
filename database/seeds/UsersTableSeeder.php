<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'username' => 'admin@goldengoal',
            'password' => bcrypt('goldengoal2@23'),
            'role' => 'Admin'
        ]);
    }
}
