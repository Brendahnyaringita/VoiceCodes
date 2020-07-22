<?php
$sessionId = $_POST['sessionId'];

$isActive  = $_POST['isActive'];
if ($isActive == 1)  {    // Compose the response
  $response  = '<?xml version="1.0" encoding="UTF-8"?>';
  $response .= '<Response>';
  $response .= '<Conference maxParticipants ="15" record="true">Room_222</Conference>';
  $response .= '</Response>';
  header('Content-type: text/plain');  echo $response;
}?>
