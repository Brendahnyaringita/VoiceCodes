<?php
// Save this code in survey_record.php. Configure the callback URL for your phone number

// First read a couple of the POST variables passed in with the request

// This is a unique ID generated for this call
$sessionId = $_POST['sessionId'];

// The caller number- your virtual number
$callerNumber = $_POST['callerNumber'];

// Check to see whether this call is active
$isActive  = $_POST['isActive'];

 if ($isActive == 1)  {

    // Compose the response
    $response  = '<?xml version="1.0" encoding="UTF-8"?>';
    $response .= '<Response>';
    $response .= '<Dial record="true" sequential="true" phoneNumbers="+254723349544"/>';
    $response .= '</Response>';

    // Print the response onto the page so that our gateway can read it
    header('Content-type: text/plain');
    echo $response;
 } else {
    // Read in call details (duration, cost). This flag is set once the call is completed.
    // Note that the gateway does not expect a response in this case

    $duration     = $_POST['durationInSeconds'];
    $currencyCode = $_POST['currencyCode'];
    $amount       = $_POST['amount'];

    //This will save the URL of the recorded conversation
    $recording    = $_POST['recordingUrl'];

    // You can then store this information in the database for your records
}
?>
