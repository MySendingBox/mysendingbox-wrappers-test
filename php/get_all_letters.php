<?php
require 'vendor/autoload.php';
require 'config.php';

use Mysendingbox\MysendingboxClient;

$apiKey = 'API_KEY';

$mysendingbox = new MysendingboxClient($apiKey);

$letters = $mysendingbox->getAllLetters(
    ['limit' => 25,
    'created_at' => '2024-03-01',
]);


print_r($letters);

?>