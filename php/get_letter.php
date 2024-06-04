<?php
require 'vendor/autoload.php';
require 'config.php';

use Mysendingbox\MysendingboxClient;

$apiKey = 'API_KEY';

$mysendingbox = new MysendingboxClient($apiKey);

$letterId = 'LETTER_ID';

$letter = $mysendingbox->getLetter($letterId);

print_r($letter);

?>