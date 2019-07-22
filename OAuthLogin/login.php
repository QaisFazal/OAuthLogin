<?php
require_once "config.php";
// require config and twitter helper
require 'Twitter/autoload.php';
require_once "twitter-callback.php";


//uncomment the below code segment to directly login user if an access token exists for the user. NOTE: check index.php header too.

// if (isset($_SESSION['access_token'])) {
//     header('Location: index.php');
//     exit();
// }

$redirectURL = "http://localhost/apilogin/fb-callback.php";
$permissions = ['email'];
$loginURL = $helper->getLoginUrl($redirectURL, $permissions);



// using sessions to store token info




// use our twitter helper
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <form>
        <input name="email" placeholder="Email" /> <br>
        <input name="password" type="password" placeholder="password" /> <br>
        <input type="submit" value="login" /> <br>
        <input type="button" onclick="window.location.href   = '<?php echo $loginURL ?>'" value="login with Facebook" /><br>
        <input type="button" onclick="window.location.href   = '<?php echo $url ?>'" value="login with Twitter" /><br>

</body>

</html>