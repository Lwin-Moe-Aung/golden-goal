<?php

namespace App\Services;

use GuzzleHttp\Client;


class DingerService
{
    protected $client;
    protected $publicKey;
    protected $merchantApiKey;
    protected $projectName;
    protected $merchantName;
    protected $stagingUrl;
    protected $productionUrl;


    public function __construct()
    {
      $this->client = new Client();
      $this->publicKey = config('dinger.public_key');
      $this->merchantApiKey = config('dinger.merchant_api_key');
      $this->projectName = "Golden Goal Myanmar";
      $this->merchantName = "GoldenGoalMyanmar";
      $this->stagingUrl = config('dinger.dinger_staging_url');
      $this->productionUrl = config('dinger.dinger_production_url');
    }

    public function preparePaymentData($providerName, $methodName, $totalAmount, $orderId, $customerName, $customerPhone)
    {
        $itemsData = [
            "name" => "Dinger University Donation",
            "amount" => $totalAmount,
            "quantity" => "1"
        ];

        $dataPay = [
            "providerName" => $providerName,
            "methodName" => $methodName,
            "totalAmount" => $totalAmount,
            "items" => json_encode([$itemsData]),
            "orderId" => $orderId,
            "customerName" => $customerName,
            "customerPhone" => $customerPhone,
        ];

        // Add additional fields based on payment type
        // if (in_array($payment, ["Visa", "Master", "JCB"])) {
        //     $dataPay["email"] = $email;
        //     $dataPay["billToForeName"] = "Customer name";
        //     $dataPay["billToSurName"] = $name;
        //     $dataPay["billAddress"] = $address;
        //     $dataPay["billCity"] = $city;
        // }

        return json_encode($dataPay);
    }

    public function getToken()
    {
      try {
        $response = $this->client->get("{$this->productionUrl}/api/token", [
          'query' => [
              'projectName' => "Golden Goal Myanmar",
              'apiKey' => "fnurn6t.UwYt9z5K1_X5cLArLPU9o-dw8kg",
              'merchantName' => "GoldenGoalMyanmar",
          ]
        ]);
        return json_decode($response->getBody()->getContents(), true);
      } catch (\GuzzleHttp\Exception\ServerException $e) {
        \Log::error('Dinger API Error', ['response' => $e->getResponse()->getBody()->getContents()]);
        return null;
      }
    }

    public function makePayment($paymentToken, $encryptedData)
    {
      $response = $this->client->post("{$this->productionUrl}/api/pay", [
        'headers' => [
            'Authorization' => "Bearer {$paymentToken}",
          ],
          'form_params' => [
              'payload' => $encryptedData,
          ],
      ]);

      return json_decode($response->getBody()->getContents(), true);
    }

    public function formCheckout($transactionNo, $formToken, $merchantOrderId)
    {
      
      return "{$this->productionUrl}/gateway/formCheckout?transactionNo={$transactionNo}&formToken={$formToken}&merchantOrderId={$merchantOrderId}";
    }
    
}
