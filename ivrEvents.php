<?php
    // This is the second request from Africa's Talking
    // Save this code in getBalance.php. Configure the events URL for your phone number

    // You can replace this array with an actual database table

    // Read the dtmf digits
    $choiceNumber = $_POST['dtmfDigits'];

    // Read the account information from the database if necessary
    if ($choiceNumber =='1') {
//        $balance = $balanceArr[$accountNumber];
        $text    = "Welcome to the English menu. Goobye";
    } 
    elseif ($choiceNumber =='2') {
 	$text 	= "Karibu Kenya. Kwaheri";
	}
    else {
        $text = "Sorry, wrong input. Good bye";
    
    // Compose the response
    $response  = '<?xml version="1.0" encoding="UTF-8"?>';
    $response .= '<Response>';
    $response .= '<Say>'.$text.'</Say>';
    $response .= '</Response>';

    // Print the response onto the page so that our gateway can read it
    header('Content-type: text/plain');
    echo $response;
} 
?>

