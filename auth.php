<?php

session_start();

require_once('rules.php');

if (isset($_SESSION['test'])) {
    header('Location: dashboard.php');
} else {
    header('Location: login.php');
}
