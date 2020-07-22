<?php
// Save this code in customerService.php. Configure the callback URL for your phone number
// to point to the location of this script on the web
// e.g http://www.myawesomesite.com/customerService.php

// First read in a couple of POST variables passed in with the request

// This is a unique ID generated for this call
$sessionId = $_POST['sessionId'];

// Check to see whether this call is active
$isActive  = $_POST['isActive'];

if ($isActive == 1)  {  
    // Forward by dialing customer service numbers and record the conversation
    // Compose the response
    $response  = '<?xml version="1.0" encoding="UTF-8"?>';
    $response .= '<Response>';
   // $response .= '<Reject cause="CALL_REJECTED"/>';
//    $response .= '<GetDigits finishOnKey="#" callbackUrl="https://9517a57e.ngrok.io/voicetest/customerCare.php">';
    $response .= '<Dial record="true" sequential="true" phoneNumbers="test.nyaringita@ke.sip.africastalking.com,test2.nyaringita@ke.sip.africastalking.com" ringbackTone="https://a2652293.ngrok.io/voicetest/test.mp3"/>';
    $response .= '</Response>';

    // Print the response onto the page so that our gateway can read it
    header('Content-type: application/xml');
    echo $response;
} else {
    // Read in call details (duration, cost). This flag is set once the call is completed.
    // Note that the gateway does not expect a response in thie case

    $duration     = $_POST['durationInSeconds'];
    $currencyCode = $_POST['currencyCode'];
    $amount       = $_POST['amount'];
   
    // Be sure to read in the URL of the recorded conversation
    $recording    = $_POST['recordingUrl'];

    // You can then store this information in the database for your records
}
?>
