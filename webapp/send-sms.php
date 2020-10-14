<?php
// Didn't get this to play nice with SSL before the presentation
// Include the bundled autoload from the Twilio PHP Helper Library
require __DIR__ . 'vendor/autoload.php';
use Twilio\Rest\Client;
// Your Account SID and Auth Token from twilio.com/console
$account_sid = '';
$auth_token = '';
// In production, these should be environment variables. E.g.:
// $account_sid = $_ENV["TWILIO_ACCOUNT_SID"];
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"];
// A Twilio number you own with SMS capabilities
$twilio_number = "+1";
$client = new Client($account_sid, $auth_token);
$sms = $client->account->messages->create(
    "+1",
    array(
        "From" => $twilio_number,
        "Body" => "I sent this message in under 10 minutes!"
    )
);
?>
