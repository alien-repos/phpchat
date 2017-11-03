<?php

session_start();
if (!isset($_SESSION['user_session'])) {
    header('Location: dashboard.php');
}

require_once('rules.php');
require_once('jsonhandler.php');
require_once('library.php');

$lastReadLine = $_GET['last_read_line'];

echo json_encode(readChatDataFromDBFile($lastReadLine));
