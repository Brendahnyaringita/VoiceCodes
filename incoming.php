  <?php
  //save this as responses.php
  //change the play url to your audio file url.
  $isActive  = $_POST['isActive'];
  $sessionId = $_POST['sessionId'];

  if ($isActive == 1)  {
  $response  = '<?xml version="1.0" encoding="UTF-8"?>';
  $response .= '<Response>';
  $response .= '<Say>Welcome to Africas Talking voice services</Say>';
  $response .= '<Play url="http://www.myvoicemailserver.com/audio/vmail.mp3"/>';
  $response .= '</Response>';
  
   // Print the response onto the page so that our gateway can read it
  header('Content-type: apllication/xml');
  echo $response;
  }
?>  
