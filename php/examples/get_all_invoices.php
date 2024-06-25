<?php
require '../vendor/autoload.php';
require 'config.php';

use Mysendingbox\MysendingboxClient;

$mysendingbox = new MysendingboxClient(API_KEY);

$invoices = $mysendingbox->getAllInvoices(['limit' => 25]);

echo ('<pre>');
print_r($invoices);
echo ('</pre>');
?>