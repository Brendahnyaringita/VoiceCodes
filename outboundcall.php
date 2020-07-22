<?php
$sessionId = $_POST['sessionId'];
// Check to see whether this call is active
$isActive  = $_POST['isActive'];
if ($isActive == 1)  {  
  // Forward by dialing customer service numbers 
  $callerNumber = $_POST['callerNumber'];
  $calleeNumber = $_POST['calleeNumber'];
  
  // Compose the response
  $response  = '<?xml version="1.0" encoding="UTF-8"?>';
  $response .= '<Response>';
  $response .= '<Dial from="'.$callerNumber.'" to="'.$calleeNumber.'" />';
  $response .= '</Response>';
  header('Content-type: text/plain');

  echo $response;
}

?>
