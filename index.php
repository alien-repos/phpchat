<?php
session_start();

require_once('rules.php');

if ($_SESSION['test'] == 'dfasdfasdfasdf') {
    header('Location: dashboard.php');
} else {
    header('Location: login.php');
}
