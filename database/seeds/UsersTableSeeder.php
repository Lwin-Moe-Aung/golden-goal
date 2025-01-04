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
        	'username' => 'admin2@goldengoal',
          'password' => bcrypt('G@lden2024'),
          'phone_number' => '09111111111',
          'role' => 'Admin'
        ]);
    }
}
