<?php

session_start();
require_once('rules.php');
require_once('jsonhandler.php');

$pwd1 = (string)$_POST['pwd_1'];
$pwd2 = (string)$_POST['pwd_2'];
$pwd3 = (string)$_POST['pwd_3'];

// read authentication json file
$authData = getDataFromJson('auth');
$valid = false;
foreach ($authData as $key => $value) {
    $valid = (($pwd1 === $value->password1) && password_verify($pwd2, $value->password2) && password_verify($pwd3, $value->password3));
    if ($valid) {
        break;
    }
}

if ($valid) {
    $_SESSION['test'] = $pwd1;
    header('Location:  dashboard.php');
} else {
    header('Location:  login.php');
}
