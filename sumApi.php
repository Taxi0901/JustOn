<?php

// set character code
header('Content-Type: application/json; charset=UTF-8');

// recieve POST values
// $json_string = file_get_contents('php://input');
$json_string = file_get_contents('data.json');

$data = json_decode($json_string, true);

if (isset($data["address"]["values"])) {

    $res["result"] = array_sum($data["address"]["values"]);
    $statusCode = 200;

} else {

    $res["result"] = null;
    $statusCode = 400;

}


// set HTTP status code
http_response_code($statusCode);

// return response by JSON format
print json_encode($res, JSON_PRETTY_PRINT);
