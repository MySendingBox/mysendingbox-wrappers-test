<?php
require 'vendor/autoload.php';

use Mysendingbox\MysendingboxClient;
use Mysendingbox\Model\AddressElectronic;

$apiKey = 'YOUR_API_KEY';

$mysendingbox = new MysendingboxClient($apiKey, null, 'https://mysendingbox-api-uat.amiltone.com/api/');

// final class AddressElectronic 
// public function __construct(
//     string $email,
//     ?string $status = MysendingboxClient::ELECTRONIC_STATUS_INDIVIDUAL,
//     ?string $company = null,
//     ?string $firstName = null,
//     ?string $lastName = null
// ) 

$to_address = new AddressElectronic(
    'Johndoe@example.com', //$email
    'individual', //$status
    null, //$company (optional)
    'John', //$firstName (optional)
    'Doe' //$lastName (optional)
);


// public function createElectronicLetter(
//     AddressElectronic $to,
//     string $postageType,
//     string $sourceFile,
//     string $sourceFileType,
//     // Not required
//     ?string $description = null,
//     ?string $sourceFile2 = null,
//     ?string $sourceFileType2 = null,
//     ?string $sourceFile3 = null,
//     ?string $sourceFileType3 = null,
//     ?string $sourceFile4 = null,
//     ?string $sourceFileType4 = null,
//     ?string $sourceFile5 = null,
//     ?string $sourceFileType5 = null,
//     ?\DateTimeInterface $sendDate = null,
//     ?string $content = null,
//     ?string $contentType = null,
//     ?string $replyTo = null,
//     ?array $variables = null,
//     ?array $metadata = null
// )

$letter = $mysendingbox->createElectronicLetter(
    $to_address, // destination AddressElectronic object
    'lre', // $postageType 'lre' , 'ere' or 'mail'
    '<html> This is the electronic letter attached document </html>', // $sourceFile
    'html', // $sourceFileType 'html','file','remote','template_id'
    'Test Electronic letter from PHP wrapper', // $description (optional)
    null, // $sourceFile2 (optional)
    null, // $sourceFileType2 (optional)
    null, // $sourceFile3 (optional)
    null, // $sourceFileType3 (optional)
    null, // $sourceFile4 (optional)
    null, // $sourceFileType4 (optional)
    null, // $sourceFile5 (optional)
    null, // $sourceFileType5 (optional)
    null, // $sendDate (optional)
    'Please review the attached documents', // $content (optional)
);

var_dump($letter);
?>