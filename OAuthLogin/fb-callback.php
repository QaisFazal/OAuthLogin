<?php

use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Authentication\AccessToken;

require_once "config.php";

try {
    $accessToken = $helper->getAccessToken();
} catch (FacebookResponseException $e) {
    echo "Response Exception: " . $e->getMessage();
    exit();
} catch (FacebookSDKException $e) {
    echo "SDK Exception: " . $e->getMessage();
    exit();
}

if (!$accessToken) {
    header('Location: login.php');
    exit();
}


$oAuth2Client = $FB->getOAuth2Client();
if (!$accessToken->isLongLived()) {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
}

$response = $FB->get("/me?fields=id,name,email", $accessToken);

$userData = $response->getGraphNode()->asArray();
$_SESSION['userData'] = $userData;
$_SESSION['access_token'] = (string) $accessToken;
header('Location: index.php');
exit();
