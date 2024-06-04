<?php
require 'vendor/autoload.php';
require 'config.php';

use Mysendingbox\MysendingboxClient;

$apiKey = 'API_KEY';

$mysendingbox = new MysendingboxClient($apiKey);

$invoices = $mysendingbox->getAllInvoices(['limit' => 25]);

echo ('<pre>');
print_r($invoices);
echo ('</pre>');
?>