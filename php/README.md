# mysendingbox-php examples

### Installation

The recommended way to install the project example is through [Composer](http://getcomposer.org).

```bash
// Install Composer
curl -sS https://getcomposer.org/installer | php

// install dependencies
composer.phar install
```

After installing, you will need to update config.php file
Change 'YOUR_API_KEY' by your api keys


```bash
define('API_KEY', 'YOUR_API_KEY');
```

## Letters 
#### Create a new Letter

update __create_letter.php__ file and go to url /create_letter.php to see the object output

you can edit $to_adress variable with your values

```php
$to_address = new AddressPaper(
'30 rue de rivoli', //$line1
'Paris', //$city
'75001', //$postalCode
'France', //$country
'Mysendingbox from PHP wrapper', //$name (optional )
);
```

...  update **createPaperLetter()** function as well ...

```php
$letter = $mysendingbox->createPaperLetter(
    $to_address, // destination AddressPaper object
    'bw', //color
    'verte', //postageType : 'ecopli', 'prioritaire', 'lr' (lettre recommandée), 'lrar' (lettre recommandée avec accusé de réception)' etc.
    '<h1>Hello World</h1>', //sourceFile
    'html', //sourceFileType
    'Test letter from PHP wrapper', //description
    $from_address, //from AddressPaper type
  
  );
```

#### create electronic letter
update __create_letter_electronic.php__ file and go to url /create_letter_electronic.php to see the object output

you can edit the __AddressElectronic__ object with your values

```php
//File: create_letter_electronic.php
$to_address = new AddressElectronic(
    'Johndoe@example.com', //$email
    'individual', //$status
    null, //$company (optional)
    'John', //$firstName (optional)
    'Doe' //$lastName (optional)
);
```

...  update **createElectronicLetter()** function as well ...

```php
//File: create_letter_electronic.php
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
```

#### Retrieve a Letter

The __get_letter.php__ file shows you an example of how to retrieve a letter. 

Replace 'LETTER_ID' by the id of the letter you want to retrieve.

```php
// File: get_letter.php
$letterId = 'LETTER_ID'; 
```

#### Get all letters

The __get_all_letters.php__ file shows you how to retrieve all letters.

You can edit getAllLetters() function with other arguments 'created_at','offset','updated_at',etc.
see the documentation.

```php
// File: get_all_letters.php
$letters = $mysendingbox->getAllLetters(['limit' => 25]);
```

### Invoices

#### Get a specific invoice

The __get_invoice.php__ file shows you how to retrieve a specific invoice.

Replace 'INVOICE_ID' by the ID of the invoice to retrieve

```php
<?php
//File: get_invoice.php
require 'vendor/autoload.php';
require 'config.php';

use Mysendingbox\MysendingboxClient;

$mysendingbox = new MysendingboxClient(API_KEY);

$invoiceId = 'INVOICE_ID'; // Replace 'INVOICE_ID' with the ID of the invoice you want to retrieve

$invoice = $mysendingbox->getInvoice($invoiceId);

print_r($invoice);

?>
```

#### Get all invoices

The __get_all_invoices.php__ shows you an example of how to get all invoices.
You can upadte getAllInvoices with relevant arguments such as 'created_at','offset','updated_at',etc.

```php
//File: get_all_invoices.php
<?php
require 'vendor/autoload.php';
require 'config.php';

use Mysendingbox\MysendingboxClient;

$mysendingbox = new MysendingboxClient(API_KEY);

$invoices = $mysendingbox->getAllInvoices(['limit' => 25]);

echo ('<pre>');
print_r($invoices);
echo ('</pre>');
?>
```

### Accounts

#### Create a new account

The __create_account.php__ file shows you how to create an account

```php
//File: create_account.php
$account_response = $mysendingbox->createAccount(
    'john.doe@example.com', // $email
    'John Doe', // $name
    '+336666666', // $phone
    null, // $webhookUrl (optional)
    'My Company name', // $companyName (optional)
    '105 rue Gambetta', // $addressLine1 (optional)
    null, // $addressLine2 (optional)
    '69007', // $addressPostalcode (optional)
    'Lyon', // $addressCity (optional)
    'France' // $addressCountry (optional)
);
```
