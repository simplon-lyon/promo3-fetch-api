<?php
require_once('evil.php');

try {
    $evil = new Evil();
    echo 'everything ok';
} catch(Exception $e) {
    http_response_code(500);
    header('Content-Type: text/plain');
    echo 'internal server error';
    echo PHP_EOL.PHP_EOL;
    echo $e;
}