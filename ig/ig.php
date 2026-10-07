<?php

$file = __DIR__ . '/ig_count.txt';

$count = file_exists($file)
    ? (int) file_get_contents($file)
    : 0;

$count++;

file_put_contents($file, $count, LOCK_EX);

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode([
    'count' => $count
]);