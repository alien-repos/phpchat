<?php

session_start();

$pwd_1 = $_POST['pwd_1'];
$pwd_2 = $_POST['pwd_2'];
$pwd_3 = $_POST['pwd_3'];

$valid = (($pwd_1 === 'test') && ($pwd_2 === 'rest') && ($pwd_3 === 'best'));

if ($valid) {
    $_SESSION['test'] = 'dfasdfasdfasdf';
    header('Location:  dashboard.php');
} else {
    header('Location:  login.php');
}
