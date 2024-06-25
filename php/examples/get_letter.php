<?php
require '../vendor/autoload.php';
require 'config.php';

use Mysendingbox\MysendingboxClient;

$mysendingbox = new MysendingboxClient(API_KEY);

$letterId = 'LETTER_ID'; // Replace 'LETTER_ID' with the ID of the letter you want to retrieve

$letter = $mysendingbox->getLetter($letterId);

print_r($letter);

?>