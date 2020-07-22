<?php
header('Content-Type: text/xml');

date_default_timezone_set("Africa/Nairobi");
//define("LOG_FILE", "/var/tmp/log/egan/callback.log");

//record the request
$HTTP_RAW_POST_DATA = file_get_contents("php://input");
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';

// 	error_log("\n" . date("Y/m/d H:i:s"). "$HTTP_RAW_POST_DATA\n", 3, LOG_FILE);
$output = '<Response><Say voice="man" playBeep="false" >Your balance is 1234 Shillings</Say></Response>';
print ($output);


