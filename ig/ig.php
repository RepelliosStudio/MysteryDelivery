<?php

$file = 'count.txt';

$count = file_exists($file) ? (int)file_get_contents($file) : 0;
$count++;

file_put_contents($file, $count, LOCK_EX);

header('Location: /');
exit;
?>