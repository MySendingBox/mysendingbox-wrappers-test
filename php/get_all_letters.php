<?php
require 'vendor/autoload.php';
require 'config.php';

use Mysendingbox\MysendingboxClient;

$apiKey = 'API_KEY';

$mysendingbox = new MysendingboxClient($apiKey);

$letters = $mysendingbox->getAllLetters(['limit' => 25]);

echo ('<pre>');
print_r($letters);
echo ('</pre>');
?>