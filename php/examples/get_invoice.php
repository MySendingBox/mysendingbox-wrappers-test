<?php
require '../vendor/autoload.php';
require 'config.php';

use Mysendingbox\MysendingboxClient;

$mysendingbox = new MysendingboxClient(API_KEY);

$invoiceId = 'INVOICE_ID'; // Replace 'INVOICE_ID' with the ID of the invoice you want to retrieve

$invoice = $mysendingbox->getInvoice($invoiceId);

print_r($invoice);

?>