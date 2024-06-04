<?php
require 'vendor/autoload.php';
require 'config.php';

use Mysendingbox\MysendingboxClient;

$apiKey = 'API_KEY';

$mysendingbox = new MysendingboxClient($apiKey);

$invoiceId = 'INVOICE_ID';

$invoice = $mysendingbox->getInvoice($invoiceId);

print_r($invoice);

?>