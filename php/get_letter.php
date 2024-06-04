<?php
require 'vendor/autoload.php';
use Mysendingbox\MysendingboxClient;

$apiKey = 'YOUR_API_KEY';

$mysendingbox = new MysendingboxClient($apiKey, null, 'https://mysendingbox-api-uat.amiltone.com/api/');

$letterId = 'LETTER_ID';

$letter = $mysendingbox->getLetter($letterId);

print_r($letter);

?>