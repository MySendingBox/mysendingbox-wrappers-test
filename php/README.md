# mysendingbox-php examples

### Installation

The recommended way to install the project example is through [Composer](http://getcomposer.org).

```bash
// Install Composer
curl -sS https://getcomposer.org/installer | php

// Add Mysendingbox.fr PHP client as a dependency
composer.phar install
```

After installing, you will need to update config.php file.
Change 'YOUR_API-KEY' by your api keys


```bash
define('API_KEY', 'YOUR_API_KEY');
```

### test examples

### Letters 
#### Create a new Letter

update create_letter.php file and go to url /create_letter.php to see the object output

you can for example edit $to_adress varaiable with your values

```php
$to_address = new AddressPaper(
'30 rue de rivoli', //$line1
'Paris', //$city
'75001', //$postalCode
'France', //$country
'Mysendingbox from PHP wrapper', //$name (optional )
);

```

... and also createPaperLetter arguments

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