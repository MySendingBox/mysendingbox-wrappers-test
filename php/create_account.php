<?php
require 'vendor/autoload.php';
use Mysendingbox\MysendingboxClient;

$apiKey = 'YOUR_API_KEY';

$mysendingbox = new MysendingboxClient($apiKey);

// public function createAccount(
//     string $email,
//     string $name,
//     ?string $phone = null,
//     ?string $webhookUrl = null,
//     ?string $companyName = null,
//     ?string $addressLine1 = null,
//     ?string $addressLine2 = null,
//     ?string $addressPostalcode = null,
//     ?string $addressCity = null,
//     ?string $addressCountry = null,
//     ?string $siren = null,
//     ?int $cancellationWindow = null
// )

$account_response = $mysendingbox->createAccount(
    'john.doe@example.com', // $email
    'John Doe', // $name
    '+336666666', // $phone
    null, // $webhookUrl (optional)
    'My Company name', // $companyName (optional)
    '105 rue Gambetta', // $addressLine1 (optional)
    null, // $addressLine2 (optional)
    '69007', // $addressPostalcode (optional)
    'Lyon', // $addressCity (optional)
    'France' // $addressCountry (optional)
);

print_r($account_response);

?>