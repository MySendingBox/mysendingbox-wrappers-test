<?php
require 'vendor/autoload.php';
require 'config.php';

use Mysendingbox\MysendingboxClient;

$mysendingbox = new MysendingboxClient(API_KEY);

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

try {
    $account_response = $mysendingbox->createAccount(
        'john.doe@example.com', // $email
        'John Doe', // $name 
    );
    echo '<pre>';
    var_dump($account_response);
    echo '</pre>';
    
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n" , 'Code: ', $e->getCode(), "\n";
}

?>