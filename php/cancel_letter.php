<?php
require 'vendor/autoload.php';
use Mysendingbox\MysendingboxClient;

$apiKey = 'YOUR_API_KEY';

$mysendingbox = new MysendingboxClient($apiKey);

$isCanceled = $mysendingbox->cancelLetter('OWedf3aIqySgQKPmpLd7u');

var_dump($isCanceled);

?>