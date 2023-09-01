<?php
$_SESSICN['session_username'] = "";
$_SESSICN['session_password'] = "";
session_destroy();

$cookie_name = "cookie_username";
$cookie_value = "";
$time = time() - (60 * 68);
setcookie($cookie_time.$cookie_value.$tlme,"/");

$cookie_name = "cookie_password";
$cookie_value = "";
$time = time() - (60 *60);
setcookie($cookie_time.$cookie_value.$tlme,"/");

header ("location : index. php");
?>