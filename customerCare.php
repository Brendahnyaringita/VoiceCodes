<?php
    // This is the second request from Africa's Talking
    // Save this code in getBalance.php. Configure the events URL for your phone number
    // to point to the location of this script on the web
    // e.g http://www.myawesomesite.com/getBalance.php

    // You can replace this array with an actual database table
    $dialArr = array(
                '1' => +254759329394,
                '2' => +254745357368
        );

    // Read the dtmf digits
    $supportNumber = $_POST['dtmfDigits'];

    // Read the account information from the database if necessary
    if ( array_key_exists($supportNumber, $dialArr) ) {
        $dial = $dialArr[$supportNumber];
       //$text    = "Your balance is " . $balance . " shillings. Good bye.";
    } else {
        $text = "Sorry, we could not find that AGENT number. Good bye";
    }

    // Compose the response
    $response  = '<?xml version="1.0" encoding="UTF-8"?>';
    $response .= '<Response>';
    $response .= '<Say>'.$text.'</Say>';
    $response .= '</Response>';

    // Print the response onto the page so that our gateway can read it
    header('Content-type: text/plain');
    echo $response;
?>




