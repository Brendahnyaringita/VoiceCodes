<?php

$sessionId = $_POST['sessionId'];

$isActive  = $_POST['isActive'];
//$url = " \"https://5d5c59919aa0.ngrok.io/voicetest/test.mp3\" ";
if ($isActive == 1)  {

    // Get the location of previously recor/ded voicemail and play back the file. Make 
    // sure its a valid web address that starts with http
    $response  = '<?xml version="1.0" encoding="UTF-8"?>';
    $response .= '<Response>';
    $response .= '<Say>Please listen to our awesome record</Say>';
    $response .= '<Play url="https://sync-dot-m-swali-hrd.appspot.com/api/cms/instrument/ag1zfm0tc3dhbGktaHJkcioLEgpFbnRlcnByaXNlGICAkN-slYMLDAsSBlN1cnZleRiAgMjHrL3rCgw/5523358727929856/media/serve/0/file.mp3"/>';
    //$response .= '<Dial phoneNumbers="+254707093127" record="true" ringbackTone="https://www.dropbox.com/s/hdy75fktip1piph/reflex_callbackTone.mp3" maxDuration="300" callerId="+254711082020" sequential="true" />';   
    
if dtmfDigits=='2': #Press 2 to talk to sales.
        return self.response.out.write('<Response><Dial phoneNumbers="%s"/><Response>' %(api_integration.sales_phone))
      elif dtmfDigits=='3': #Press 3 to talk to Accounts
        return self.response.out.write('<Response><Dial phoneNumbers="%s"/><Response>' %(api_integration.account_phone))

$response .= '</Response>';
    // Print the response onto the page so that our gateway can read it
    header('Content-type: apllication/xml');
    echo $response;
} else {
    // Read in call details (duration, cost). This flag is set once the call is completed.
    // Note that the gateway does not expect a response in thie case

    $duration     = $_POST['durationInSeconds'];
    $currencyCode = $_POST['currencyCode'];
    $amount       = $_POST['amount'];
//    $hangupCause  = $_POST['hangupCause'];

   echo $sessionId;
   echo $currencyCode;
   echo $amount;
  // echo $hangupCause;
    // You can then store this information in the database for your records
}
