<?php
// Save this code in checkBalance.php. Configure the callback URL for your phone number

$sessionId = $_POST['sessionId'];
$isActive  = $_POST['isActive'];
//$choiceNumber = $_POST['dtmfDigits'];

if ($isActive == 1)  {
    // Read in the caller's number. The format will contain the + in the beginning
    $callerNumber = $_POST['callerNumber'];
    $name = $_POST['name']

    $response  = '<?xml version="1.0" encoding="UTF-8"?>';
    $response .= '<Response>';
    $response .= '<Say>'Welcome, to our awesome voice service . $name .'</Say>';
    $response .= '</Response>';
    // Print the response onto the page so that our gateway can read it
    header('Content-type: text/plain');
    echo $response;
}
else {
    $duration     = $_POST['durationInSeconds'];
    $currencyCode = $_POST['currencyCode'];
    $amount       = $_POST['amount'];

    // You can then store this information in the database for your records
}




