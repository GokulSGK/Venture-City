 <?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '994279152473-e6b43a8h00a4p53md29m7oq1auedcqce.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'IEWJaH4wBREsXCl62cSV97mG'; //Google client secret
$redirectURL = 'http://localhost/login_with_google_using_php/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>