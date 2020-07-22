<?php

$sessionId = $_POST['sessionId'];
$callerNumber = $_POST['callerNumber'];
$isActive  = $_POST['isActive'];

 if ($isActive == 1)  {

    // Compose the response 
    $response  = '<?xml version="1.0" encoding="UTF-8"?>';
    $response .= '<Response>';
    //$response .= '<GetDigits callbackUrl="https://e68c90a9.ngrok.io/voicetest/ivrEvents.mp3" >';
    //$response .= '<Play url="https://e68c90a9.ngrok.io/voicetest/ivr.mp3"/>';
    $response .= '<GetDigits numDigits= 1  callbackUrl="https://e68c90a9.ngrok.io/voicetest/ivrEvents.mp3" >';
    $response .= '<Play url="https://e68c90a9.ngrok.io/voicetest/ivr.mp3"/>';
    $response .= '</GetDigits>';
    $response .= '</Response>';

    // Print the response onto the page so that our gateway can read it
    header('Content-type: text/plain');
    echo $response;
 } else {
    // Read in call details (duration, cost). This flag is set once the call is completed.
    $duration     = $_POST['durationInSeconds'];
    $currencyCode = $_POST['currencyCode'];
    $amount       = $_POST['amount'];
    // You can then store this information in the database for your records
}
?>
