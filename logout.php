<?php
session_start();
require_once('rules.php');

session_unset();
header('Location: /');
