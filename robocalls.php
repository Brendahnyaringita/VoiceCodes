<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

// Set your app credentials
$username = "MyAppUsername";
$apikey   = "MyAppAPIKey";

// Initialize the SDK
$AT       = new AfricasTalking($username, $apikey);

// Get the voice service
$voice    = $AT->voice();

// Set your Africa's Talking phone number in international format
$from     = $_POST['from'];
$to       = $_POST['to'];

try {
    // Make the call
    $results = $voice->call([
        'from' => $from,
        'to'   => $to
    ]);

    print_r($results);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
}
