<?php
require_once "config.php";
unset($_SESSION['access_token']);
unset($_SESSION['twitter_access_token']);
session_destroy();
header('Location:login.php');
exit();
