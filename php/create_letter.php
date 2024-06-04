<?php
require 'vendor/autoload.php';
require 'config.php';

use Mysendingbox\MysendingboxClient;
use Mysendingbox\Model\AddressPaper;

$apiKey = 'API_KEY';

$mysendingbox = new MysendingboxClient($apiKey);

// final class AddressPaper 
// public function __construct(
//   string $line1,
//   string $city,
//   string $postalCode,
//   string $country,
//   ?string $name = null,
//   ?string $company = null,
//   ?string $line2 = null,
//   ?string $line3 = null
// ) 

$to_address = new AddressPaper(
'30 rue de rivoli', //$line1
'Paris', //$city
'75001', //$postalCode
'France', //$country
'Mysendingbox from PHP wrapper', //$name (optional )
);

$from_address = new AddressPaper(
'105 rue Gambetta', //$line1
'Lyon', //$city
'69007', //$postalCode
'France', //$country
);

// public function createPaperLetter(
// AddressPaper $to,
// string $color,
// string $postageType,
// string $sourceFile,
// string $sourceFileType,
// // Not required
// ?string $description = null,
// ?AddressPaper $from = null,
// ?string $sourceFile2 = null,
// ?string $sourceFileType2 = null,
// ?string $sourceFile3 = null,
// ?string $sourceFileType3 = null,
// ?string $sourceFile4 = null,
// ?string $sourceFileType4 = null,
// ?string $sourceFile5 = null,
// ?string $sourceFileType5 = null,
// ?bool $bothSides = null,
// ?bool $staple = null,
// ?\DateTimeInterface $sendDate = null,
// ?string $addressPlacement = null,
// ?string $postageSpeed = null,
// ?int $pdfMargin = null,
// ?ReadAddressFromPdf $readAddressFromPdf = null,
// ?bool $manageDeliveryProof = null,
// ?bool $manageReturnedMail = null,
// ?string $envelope = null,
// ?string $envelopeWindow = null,
// ?bool $printSenderAddress = null,
// ?array $variables = null,
// ?array $metadata = null
// )
  
  $letter = $mysendingbox->createPaperLetter(
    $to_address, // destination AddressPaper object
    'bw', //color
    'verte', //postageType : 'ecopli', 'prioritaire', 'lr' (lettre recommandée), 'lrar' (lettre recommandée avec accusé de réception)' etc.
    '<h1>Hello World</h1>', //sourceFile
    'html', //sourceFileType
    'Test letter from PHP wrapper', //description
    $from_address, //from AddressPaper type
  
  );
  
  echo('<pre>');
  print_r($letter);
  echo('</pre>');
  ?>

