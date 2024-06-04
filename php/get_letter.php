<?php
require 'vendor/autoload.php';
use Mysendingbox\MysendingboxClient;

$apiKey = 'YOUR_API_KEY';

$mysendingbox = new MysendingboxClient($apiKey);

$letterId = 'LETTER_ID';

$letter = $mysendingbox->getLetter($letterId);

print_r($letter);

?>