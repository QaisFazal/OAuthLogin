<?php
session_start();

require_once "Facebook/autoload.php";
require_once "Twitter/autoload.php";

$FB = new \Facebook\Facebook([
    'app_id' => '351096135567927',  //create an app id and put it here.
    'app_secret' => '058451c0b7969c4422a3fe4d2a88eafa', // put the app secret in here
    'default_graph_version' => 'v3.3'
]);



// your app consumer key
define('CONSUMER_KEY', 'ZTldwRvwjVF6A4W1gYQZTUaik');

// your app consumer secret
define('CONSUMER_SECRET', 'xuIFL3u2FLBSZLIqeXURNQ4w5P1C3IWCfN4wcjPZOZQQqwTwVm');

// your app callback url
define('OAUTH_CALLBACK', 'http://localhost/apilogin/twitter-callback.php');




$helper = $FB->getRedirectLoginHelper();
