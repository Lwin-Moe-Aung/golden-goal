<?php

namespace App\Services;

use GuzzleHttp\Client;

class SmsPohService
{
    protected $client;
    protected $apiUrl = 'https://smspoh.com/api/v2/send';
    protected $token;

    public function __construct()
    {
        $this->client = new Client();
        $this->token = config('sms-poh.token');
        if (!$this->token) {
            throw new \Exception('SMS Poh API token not set in .env file.');
        }
    }

    public function sendOtp($to, $message, $sender = 'Info')
    {
        $data = [
            'to' => $to,
            'message' => $message,
            'sender' => $sender,
        ];

        $response = $this->client->post($this->apiUrl, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token,
                'Content-Type' => 'application/json',
            ],
            'json' => $data,
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
