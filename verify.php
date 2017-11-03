<?php

session_start();
require_once('rules.php');
require_once('jsonhandler.php');
require_once('library.php');

$user = (string)$_POST['user'];
$pwd2 = (string)$_POST['pwd_2'];
$pwd3 = (string)$_POST['pwd_3'];

// read authentication json file
$authData = getDataFromDbFile('users');

$valid = false;
foreach ($authData as $key => $value) {
    $valid = (($user === $value->user) && password_verify($pwd2, $value->password2) && password_verify($pwd3, $value->password3));
    if ($valid) {
        break;
    }
}

if ($valid) {
    $_SESSION['user_session'] = $user;
    header('Location:  dashboard.php');
} else {
    header('Location:  login.php');
}
