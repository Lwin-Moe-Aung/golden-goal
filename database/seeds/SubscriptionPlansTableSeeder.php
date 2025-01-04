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
        	'title' => 'Standard (30 days)',
          'total_amount' => '5900',
          'desc' => '[{"value":"ပွဲကြိုအားလုံး","status":"true"},{"value":"ကြေးပြောင်းအားလုံး","status":"true"},{"value":"ရာခိုင်နှုန်းအားလုံး","status":"true"},{"value":"Special ပွဲကြိုများ","status":"true"}]',
          'duration' => '30',
        ],
        [
        	'title' => 'Advance (90 days)',
          'total_amount' => '9900',
          'desc' => '[{"value":"ပွဲကြိုအားလုံး","status":"true"},{"value":"ကြေးပြောင်းအားလုံး","status":"true"},{"value":"ရာခိုင်နှုန်းအားလုံး","status":"true"},{"value":"Special ပွဲကြိုများ","status":"true"}]',
          'duration' => '90',
        ],
        [
        	'title' => 'Pro Max (180 days)',
          'total_amount' => '14900',
          'desc' => '[{"value":"ပွဲကြိုအားလုံး","status":"true"},{"value":"ကြေးပြောင်းအားလုံး","status":"true"},{"value":"ရာခိုင်နှုန်းအားလုံး","status":"true"},{"value":"Special ပွဲကြိုများ","status":"true"}]',
          'duration' => '180',
        ]
      ];

      foreach ($plans as $plan) {
        SubscriptionPlan::create($plan);
      }
    }
}

