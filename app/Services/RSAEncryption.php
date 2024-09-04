<?php
namespace App\Services;
use phpseclib\Crypt\RSA;

class RSAEncryption
{
  protected $publicKey;

  public function __construct()
  {
    $this->publicKey = config('dinger.public_key');
  }

  public function encrypt($jsonData)
  {
    // try {
      $rsa = new RSA();

      extract($rsa->createKey(1024));
      $rsa->loadKey($this->publicKey); // public key
      $rsa->setEncryptionMode(2);

      $cipherText = $rsa->encrypt($jsonData);
      // base 64 encode the encrypted data_pay
      $encoded_cipherText = base64_encode($cipherText);

      return $encoded_cipherText;

    // } catch (\Exception $e) {
      // Handle general encryption errors
    //   throw new \Exception('Failed to encrypt data: ' . $e->getMessage());
    // } 
  }
}