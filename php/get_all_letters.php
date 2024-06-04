<?php
require 'vendor/autoload.php';
require 'config.php';

use Mysendingbox\MysendingboxClient;

$mysendingbox = new MysendingboxClient(API_KEY);

$letters = $mysendingbox->getAllLetters(['limit' => 25]);

echo ('<pre>');
print_r($letters);
echo ('</pre>');
?>