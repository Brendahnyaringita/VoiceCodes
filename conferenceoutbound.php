<?php
$sessionId = $_POST['sessionId'];
// Check to see whether this call is active
$isActive  = $_POST['isActive'];
if ($isActive == 1)  {  
  // Forward by dialing customer service numbers 
  $from = $_POST['from'];
  $to = $_POST['to'];
  
  // Compose the response
  $response  = '<?xml version="1.0" encoding="UTF-8"?>';
  $response .= '<Response>';
  $response .= '<Conference record="true" waitUrl="https://s3-us-west-1.amazonaws.com/olycash-files-b1/song_133C9A1_1588884426_507.mp3">Room 1234</Conference>';
  $response .= '</Response>';
  header('Content-type: text/plain');

  echo $response;
}

?>

