<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Services\DingerService;
use App\Services\RSAEncryption;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class DingerController extends BaseController
{
  protected $dingerService;
  protected $rSAEncryption;


  public function __construct(DingerService $dingerService, RSAEncryption $rSAEncryption)
  {
      $this->dingerService = $dingerService;
      $this->rSAEncryption = $rSAEncryption;
  }

  public function processPaymentOld(Request $request)
  {
    $providerName = $request->input('providerName');
    $methodName = $request->input('methodName');
    $totalAmount = $request->input('totalAmount');
    $orderId = $request->input('orderId');
    $customerName = $request->input('customerName');
    $customerPhone = $request->input('customerPhone');
    // $email = $request->input('email');
    // $address = $request->input('address');
    // $city = $request->input('city');

    $paymentData = $this->dingerService->preparePaymentData($providerName, $methodName, $totalAmount, $orderId, $customerName, $customerPhone);
    $encryptedData = $this->rSAEncryption->encrypt($paymentData);

    // Step 1: Get Dinger Token
    $tokenResponse = $this->dingerService->getToken();
    $paymentToken = $tokenResponse["response"]["paymentToken"];

    // Step 3: Make Payment Request
    $paymentResponse = $this->dingerService->makePayment($paymentToken, $encryptedData);
    
    if (is_array($paymentResponse) && isset($paymentResponse['response']) && !isset($paymentResponse['response']['formToken'])) {
      return response()->json($paymentResponse);
    }

    $transactionNo =  $paymentResponse["response"]["transactionNum"];
    $formToken = $paymentResponse["response"]["formToken"];
    $merchantOrderId =$paymentResponse["response"]["merchOrderId"];
    $forCheckOutRes = $this->dingerService->formCheckout($transactionNo, $formToken, $merchantOrderId);
    return response()->json(["url" => $forCheckOutRes]);

  }

  public function processPayment(Request $request)
  {
    // Step 1: Get Dinger Token
    $tokenResponse = $this->dingerService->getToken();
    $paymentToken = $tokenResponse["response"]["paymentToken"];

    // Step 2: Prepare and encrypt payment data
    $paymentData = [
        'providerName' => $request->input('providerName'),
        'methodName' => $request->input('methodName'),
        'totalAmount' => $request->input('totalAmount'),
        'orderId' => $request->input('orderId'),
        'customerPhone' => $request->input('customerPhone'),
        'customerName' => $request->input('customerName'),
        'items' => json_encode([['name' => 'Package 2', 'amount' => $request->input('totalAmount'), 'quantity' => '1']]),
    ];

    $encryptedData = $this->rSAEncryption->encrypt(json_encode($paymentData));

    // Step 3: Make Payment Request
    $paymentResponse = $this->dingerService->makePayment($paymentToken, $encryptedData);

    if (is_array($paymentResponse) && isset($paymentResponse['response']) && !isset($paymentResponse['response']['formToken'])) {
      return response()->json($paymentResponse);
    }

    $transactionNo =  $paymentResponse["response"]["transactionNum"];
    $formToken = $paymentResponse["response"]["formToken"];
    $merchantOrderId =$paymentResponse["response"]["merchOrderId"];

    $forCheckOutRes = $this->dingerService->formCheckout($transactionNo, $formToken, $merchantOrderId);

    return response()->json(["url" => $forCheckOutRes]);

    // "{"providerName":"AYA Pay","methodName":"QR","totalAmount":2200,"items":[{"name":"Dinger University Donation","amount":2200,"quantity":"1"}],"orderId":"11119","customerName":"Yar Gyi","customerPhone":"09787747310"}"
  
  }

  public function handleCallback(Request $request)
  {
    $secretKey = "d655c33205363f5450427e6b6193e466";
    // f15cc295f86f6f4779e751e011d823c6

    $result = $request->getContent();
    $decodedValue = json_decode($result, true);

    $paymentResult = $decodedValue['paymentResult'] ?? null;
    $checkSum = $decodedValue['checksum'] ?? null;

    if (!$paymentResult || !$checkSum) {
        return response()->json(['error' => 'Invalid payload'], 400);
    }

    // Base64 decode the payment result before decryption
    $encryptedData = base64_decode($paymentResult);

    // Debug: Check the base64 decoded data
    Log::debug('Base64 Decoded Data:', ['data' => $encryptedData]);

    // Decrypt the payment result
    $decrypted = openssl_decrypt($encryptedData, "AES-256-ECB", $secretKey, OPENSSL_RAW_DATA);

    Log::debug('Decrypted Data:', ['decrypted' => $decrypted]);

    if (!$decrypted || hash("sha256", $decrypted) !== $checkSum) {
        Log::error('Incorrect Signature.');
        return response()->json(['error' => 'Incorrect Signature'], 400);
    }
    $decryptedValues = json_decode($decrypted, true);

    if (!$decryptedValues) {
        return response()->json(['error' => 'Decryption failed'], 400);
    }

    $transactionStatus = $decryptedValues["transactionStatus"] ?? null;
    $merchantOrderId = $decryptedValues["merchantOrderId"] ?? null;
    $totalAmount = $decryptedValues["totalAmount"] ?? null;
    $methodName = $decryptedValues["methodName"] ?? null;
    $providerName = $decryptedValues["providerName"] ?? null;
    $transactionId = $decryptedValues["transactionId"] ?? null;
    $customerName = $decryptedValues["customerName"] ?? null;
    $date = now();

    if ($transactionStatus === "SUCCESS") {
        $this->storeTransaction($totalAmount, $transactionStatus, $methodName, $providerName, $merchantOrderId, $transactionId, $customerName, $date);
    } else {
        Log::error('Transaction failed', $decryptedValues);
    }

    $callBackResponse = [
        'transactionStatus' => $transactionStatus,
        'merchantOrderId' => $merchantOrderId,
        'totalAmount' => $totalAmount,
        'methodName' => $methodName,
        'providerName' => $providerName,
        'transactionId' => $transactionId,
        'customerName' => $customerName,
    ];

    return response()->json(['data' => $callBackResponse]);
  }

  protected function storeTransaction($totalAmount, $transactionStatus, $methodName, $providerName, $merchantOrderId, $transactionId, $customerName, $date)
  {
    DB::table('dinger_call_back_data')->insert([
        'totalAmount' => $totalAmount,
        'transactionStatus' => $transactionStatus,
        'methodName' => $methodName,
        'providerName' => $providerName,
        'merchantOrderId' => $merchantOrderId,
        'transactionId' => $transactionId,
        'customerName' => $customerName,
        'created_at' => $date,
        'updated_at' => $date
    ]);

    Log::info('New transaction record created successfully');
  }

}
