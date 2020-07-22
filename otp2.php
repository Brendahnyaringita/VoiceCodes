<?php
include 'otp.php';
$otpNumber = isset($_POST['dtmfDigits']) ? $_POST['dtmfDigits'] : '';

if  $otpNumber == $otp) {
       // $otpNumber == $otp;
        $reply = " Correct password";
    } else {
        $reply = " Sorry wrong password";
    }
    // Compose the response
    $result  = '<?xml version="1.0" encoding="UTF-8"?>';
    $result .= '<Response>';
    $result .= '<Say>'.$reply.'</Say>';
    $result .= '</Response>';

    header('Content-type: text/plain');
    echo $result;
?>
