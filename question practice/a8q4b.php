<?php
$file = fopen('yo.txt', 'r');
$char = fgetc($file);
echo $char ."<br>";
fclose($file);
$fptr=fopen("yo.txt","r");
//fgets will display one line
echo fgets($fptr);
?>