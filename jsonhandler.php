<?php

require_once('rules.php');

function putDataToJson(string $fileName, array $data) : bool
{
    file_put_contents($fileName, json_encode($p));

    return true;
}

function getDataFromJson(string $filename) : array
{
    return json_decode(file_get_contents($filename . '.json'));
}
