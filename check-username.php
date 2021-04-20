<?php
//require_once "controllers/login-controller.php";
require_once "control.php";
$username=$_GET["name"];
$res = checkUsernameValidity($username);
echo $res;

?>