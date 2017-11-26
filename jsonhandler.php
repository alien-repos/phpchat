<?php

require_once('rules.php');

if (!isset($_SESSION['user_session'])) {
    header('Location: /');
}

define('DB_PATH', __DIR__ . '/' . 'database/');
define('EXT', '.json');

function putDataToDbFile(string $fileName, array $data) : bool
{
    file_put_contents($fileName, json_encode($p));

    return true;
}

function getDataFromDbFile(string $fileName) : array
{
    return readDbFile(file_get_contents(filePath($fileName)));
}

function readDbFile(string $fileContent) : array
{
    return json_decode($fileContent);
}

function filePath(string $fileName) : string
{
    return DB_PATH . $fileName . EXT;
}

function writeChatDataToDBFile(string $fromUser, string $message) : bool
{
    // username(session name) as file name
    $fileName = 'cht984739485';
    $date = date('h:i:s');
    // prepare data
    $data = '<span class="userhighlight">' . $fromUser . '@[' . $date . '] : </span>' . $message;
    // append data to file
    file_put_contents(DB_PATH . $fileName . '.log', $data.PHP_EOL, FILE_APPEND | LOCK_EX);

    return true;
}

function readChatDataFromDBFile(int $lastReadLine) : array
{
    $file = DB_PATH . 'cht984739485' . '.log';
    if ($lastReadLine == 0) {
        return ['status' => true, 'data' => nl2br(file_get_contents($file)), 'lastReadLine' => getFileLastLineNumber($file)];
    }

    $fileContentsArray = file($file);
    $fileContentsArray = array_slice($fileContentsArray, $lastReadLine);

    return ['status' => true, 'data' => nl2br(implode("\n", $fileContentsArray)), 'lastReadLine' => getFileLastLineNumber($file)];
}

function getFileLastLineNumber($file)
{
    return count(file($file));
}
