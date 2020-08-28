<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Disposition, Content-Type, Content-Length, Accept-Encoding");
header("Content-type:application/json");
$data = json_decode(file_get_contents("php://input"));

$hostname = getenv('HOSTNAME');
$react_env = getenv('REACT_APP_TEST_ENV');


// php get all env values

// combine all the values

echo getenv('REACT_APP_TEST_ENV');

// echo $hostname + $react_env;

print_r($data);