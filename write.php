<?php

session_start();
if (!isset($_SESSION['user_session'])) {
    header('Location: dashboard.php');
}

require_once('rules.php');
require_once('jsonhandler.php');
require_once('library.php');


$fromUser = $_POST['from_user'];
$message = $_POST['message'];
$lastReadLine = $_POST['last_read_line'];

$message = preg_replace("/[^ \w]+/", "", $message);

if (writeChatDataToDBFile($fromUser, $message)) {
    echo json_encode(readChatDataFromDBFile($lastReadLine));
}
