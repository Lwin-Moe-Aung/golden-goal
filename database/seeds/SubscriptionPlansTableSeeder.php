<?php

use Illuminate\Database\Seeder;
use App\SubscriptionPlan;

class SubscriptionPlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $plans = [
        [
        	'title' => 'Starter',
          'total_amount' => 'Free',
          'desc' => '[{"value":"Every basic features","status":"true"},{"value":"Previews","status":"true"},{"value":"Detail Information","status":"false"},{"value":"Real time results","status":"false"}]',
        ],
        [
        	'title' => 'Standard (30 days)',
          'total_amount' => '15000',
          'desc' => '[{"value":"Every basic features","status":"true"},{"value":"Previews","status":"true"},{"value":"Detail Information","status":"true"},{"value":"Real time results","status":"false"}]',
        ],
        [
        	'title' => 'Advance (90 days)',
          'total_amount' => '30000',
          'desc' => '[{"value":"Every basic features","status":"true"},{"value":"Previews","status":"true"},{"value":"Detail Information","status":"true"},{"value":"Real time results","status":"true"}]',
        ],
        [
        	'title' => 'Pro Max (180 days)',
          'total_amount' => '50000',
          'desc' => '[{"value":"Every basic features","status":"true"},{"value":"Previews","status":"true"},{"value":"Detail Information","status":"true"},{"value":"Real time results","status":"true"}]',
        ]
      ];

      foreach ($plans as $plan) {
        SubscriptionPlan::create($plan);
      }
    }
}

