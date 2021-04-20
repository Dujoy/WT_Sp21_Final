<?php
//require_once "controllers/login-controller.php";
require_once "controlt.php";
$username=$_GET["name"];
$res = checkUsernameValidity($username);
echo $res;

?>