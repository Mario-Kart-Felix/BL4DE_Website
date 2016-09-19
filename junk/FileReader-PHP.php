<?php

$file = fopen('text.txt', 'r');
while ($line = fgets($file)){
    echo 'the line is:'.$line;
}

$path = 'php';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach ($files as $file){
    echo $file;
}

?>