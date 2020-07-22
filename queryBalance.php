<?php
    // Save this code in queryBalance.php. Configure the callback URL for your phone number
    // to point to the location of this script on the web
    // e.g http://www.myawesomesite.com/queryBalance.php

    // First read in a couple of POST variables passed in with the request

    // This is a unique ID generated for this call
    $sessionId = $_POST['sessionId'];

    // Check to see whether this call is active
    $isActive  = $_POST['isActive'];

    // The call is active
    if ($isActive == 1)  {
        // This is the First request we are receiving. Prompt for the account number
        // Compose the response 
        $response  = '<?xml version="1.0" encoding="UTF-8"?>';
        $response .= '<Response>';
        $response .= '<GetDigits  finishOnKey="#" callbackUrl="https://3fcd292a.ngrok.io/voicetest/getBalance.php">';
        $response .= '<Say>Please enter your account number followed by the hash sign</Say>';
        $response .= '</GetDigits>';
        $response .= '</Response>';
    }

    // Print the response onto the page so that our gateway can read it
    header('Content-type: text/plain');
    echo $response;
?>
