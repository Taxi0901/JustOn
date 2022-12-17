<?php

$url = "https://sum-juston.herokuapp.com/sum.php";

$data = file_get_contents("testData.json");

$context = array(
    "http" => array(
        "method"  => "POST",
        "header"  => implode("\r\n", array("Content-Type: application/x-www-form-urlencoded",)),
        "ignore_errors" => true,
        "content" => $data
    )
);

$response = file_get_contents($url, false, stream_context_create($context));

echo '<pre>';
print_r($response);
echo '</pre>';
