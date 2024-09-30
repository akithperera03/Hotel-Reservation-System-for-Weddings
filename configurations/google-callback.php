<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Ensure the path is correct
use Google\Client;
use Google\Service\Oauth2; 
session_start();

// Google client credentials
$clientID = '1067500891841-p86vaam4qbah71njorghgqceo187fika.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/IWT-Assignment-Y1S2/configurations/google_redirect.php'; // Updated redirect URI

$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Authenticate the user using the code from Google
if (!isset($_GET['code'])) {
    header('Location: ../login.php'); // If no code, redirect to login
    exit();
}

$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
$client->setAccessToken($token);

// Get user info
$oauth2 = new Google_Service_Oauth2($client);
$userInfo = $oauth2->userinfo->get();

// Store user info in session
$_SESSION['user_email'] = $userInfo->email;
$_SESSION['user_name'] = $userInfo->name;

// Redirect to dashboard after login
header('Location: ../dashboard.php');
exit();
?>
