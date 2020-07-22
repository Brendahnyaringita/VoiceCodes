$sessionId = $_POST['sessionId'];
// Check to see whether this call is active
$isActive  = $_POST['isActive'];
if ($isActive == 1)  {  
  // Forward by dialing customer service numbers 
  $callerNumber = $_POST['callerNumber'];
  // Compose the response
  $response  = '<?xml version="1.0" encoding="UTF-8"?>';
  $response .= '<Response>';
  $response .= '<Dial sequential="true" phoneNumbers="'.$callerNumber.'"/>';
  $response .= '</Response>';
