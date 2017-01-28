<?php
include('./vendor/autoload.php');
include('./config.php');
include('./randos.php');

use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\IpMessagingGrant;

// An identifier for your app - can be anything you'd like
$appName = 'TwilioChatDemo';
// choose a random username for the connecting user
$identity = randomUsername();
// A device ID is passed as a query string parameter to this script
$deviceId = $_GET['device'];
// The endpoint ID is a combination of the above
$endpointId = $appName . ':' . $identity . ':' . $deviceId;

// Create access token, which we will serialize and send to the client
$token = new AccessToken(
    $TWILIO_ACCOUNT_SID,
    $TWILIO_API_KEY,
    $TWILIO_API_SECRET,
    3600,
    $identity
);

// Grant access to IP Messaging
$grant = new IpMessagingGrant();
$grant->setServiceSid($TWILIO_IPM_SERVICE_SID);
$grant->setPushCredentialSid('CRe9c5eff29e744709d7df875f8a797bf0');
$grant->setEndpointId($endpointId);
$token->addGrant($grant);

// return serialized token and the user's randomly generated ID
echo json_encode(array(
    'identity' => $identity,
    'token' => $token->toJWT(),
));
