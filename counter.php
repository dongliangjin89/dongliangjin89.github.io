<?php

$file = 'assets/counter.txt';

$count = file_get_contents($file);
$count = intval($count);

$count++;

file_put_contents($file, $count);

echo "Welcome, " . $count;

?>
