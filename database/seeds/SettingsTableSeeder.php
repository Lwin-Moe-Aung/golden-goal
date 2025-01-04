<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(
            [
                'is_active_otp_service' => '0',
                'is_force_update' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
