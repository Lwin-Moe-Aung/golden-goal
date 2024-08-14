<?php

use Illuminate\Database\Seeder;
use App\PaymentMethod;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $payments = [
        [
        	'provider' => 'KBZ Pay',
          'method' => 'PIN',
          'icon' => '/images/payments/kbz_pay.png'
        ],
        [
        	'provider' => 'KBZ Pay',
          'method' => 'QR',
          'icon' => '/images/payments/kbz_pay.png'
        ],
        [
        	'provider' => 'Wave Pay',
          'method' => 'PIN',
          'icon' => '/images/payments/wave_pay.png'
        ],
        [
        	'provider' => 'AYA Pay',
          'method' => 'PIN',
          'icon' => '/images/payments/aya_pay.jpg'
        ],
        [
        	'provider' => 'AYA Pay',
          'method' => 'QR',
          'icon' => '/images/payments/aya_pay.jpg'
        ],
        [
        	'provider' => 'CB Pay',
          'method' => 'PIN',
          'icon' => '/images/payments/cb_pay.jpg'
        ],
        [
        	'provider' => 'CB Pay',
          'method' => 'QR',
          'icon' => '/images/payments/cb_pay.jpg'
        ],
        [
        	'provider' => 'MPU',
          'method' => 'PIN',
          'icon' => '/images/payments/mpu.jpeg'
        ],
        
      ];

      foreach ($payments as $payment) {
        PaymentMethod::create($payment);
      }
    }
}
