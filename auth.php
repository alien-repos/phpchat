<?php

require_once('rules.php');

// if logged in redirect to dashboard
// else redirect to login

if (isset($_SESSION['test']) && ($_SESSION['test'] == 'dfasdfasdfasdf')) {
    require_once('Location: , dashboard.php');
}
    require_once('Location: , login.php');
