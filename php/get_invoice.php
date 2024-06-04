<?php
require 'vendor/autoload.php';
use Mysendingbox\MysendingboxClient;

$apiKey = 'YOUR_API_KEY';

$mysendingbox = new MysendingboxClient($apiKey);

$invoiceId = 'INVOICE_ID';

$invoice = $mysendingbox->getInvoice($invoiceId);

print_r($invoice);

?>