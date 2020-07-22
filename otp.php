<?php
// Save this code in checkBalance.php. Configure the callback URL for your phone number
 $sessionId = $_POST['sessionId'];
 $isActive  = $_POST['isActive'];
 $otp = (rand(100,200));
//$otp =(string)$otpgen;
  $text = "Your O T P is,  " . $otp . ", bye";

if ($isActive == 1)  {
    // Read in the caller's number. The format will contain the + in the beginning
    $callerNumber = $_POST['callerNumber'];
    // You can replace this with your preffered OTP generator

  //  $text = "Your O T P is,  " . $otp . " bye";
    // Compose the response
    $response  = '<?xml version="1.0" encoding="UTF-8"?>';
    $response .= '<Response>';
    $response .= '<GetDigits finishOnKey="#" callbackUrl = "https://30dce712.ngrok.io/voicetest/otp2.php" >';
    $response .= '<Say>'.$text.'</Say>';
    $response .= '</GetDigits>';
    $response .= '</Response>';
 
    // Print the response onto the page so that our gateway can read it
    header('Content-type: text/plain');
    echo $response;
}
?>
