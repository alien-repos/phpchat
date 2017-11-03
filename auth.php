<?php

session_start();

require_once('rules.php');

if (isset($_SESSION['user_session'])) {
    header('Location: dashboard.php');
} else {
    header('Location: login.php');
}
