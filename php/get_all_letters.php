<?php
require 'vendor/autoload.php';
use Mysendingbox\MysendingboxClient;

$apiKey = 'YOUR_API_KEY';

$mysendingbox = new MysendingboxClient($apiKey, null, 'https://mysendingbox-api-uat.amiltone.com/api/');

$letters = $mysendingbox->getAllLetters(
    ['limit' => 25,
    'created_at' => '2024-03-01',
]);


print_r($letters);

?>