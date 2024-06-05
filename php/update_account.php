<?php
require 'vendor/autoload.php';
require 'config.php';

use Mysendingbox\MysendingboxClient;

$mysendingbox = new MysendingboxClient(API_KEY);

$accountId = 'ACCOUNT_ID'; // Replace 'ACCOUNT_ID' with the ID of the account you want to update

try {
    $account_response = $mysendingbox->updateAccount( $accountId, 'newEmail@email.com');
    
    var_dump($account_response); // the output is a boolean 
    
}
catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n" , 'Code: ', $e->getCode(), "\n";
}

?>