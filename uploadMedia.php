<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;
// Set your app credentials
$username = "nyaringita";
$apikey   = "9cd01569ae47ceea52784a9a1db045b9f8489c3b88e1997a84b11c2e78893475";

// Initialize the SDK
$AT       = new AfricasTalking($username, $apikey);

// Get the voice service
$voice    = $AT->voice();

// Set your Africa's Talking phone number that will be using the file
$phoneNumber = "+256323200679";

// Set url of file to upload
$fileUrl = "https://024972868258.ngrok.io/voicetest/test.mp3";

try {
    // Upload the file
    $result = $voice->uploadMediaFile([
        "phoneNumber" => $phoneNumber,
        "url"         => $fileUrl
    ]);

     print_r($result);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}
