<?php
require 'vendor/autoload.php';
use Mysendingbox\MysendingboxClient;

$apiKey = 'YOUR_API_KEY';

$mysendingbox = new MysendingboxClient($apiKey);

$letterId = 'LETTER_ID';

$isCanceled = $mysendingbox->cancelLetter($letterId);

var_dump($isCanceled);

?>