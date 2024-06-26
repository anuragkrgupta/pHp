<?php
$fptr=fopen("yo.txt","w");
$var="Hello World!";
fwrite($fptr,$var);
fclose($fptr);
fwrite($fptr,"Yo Mate");
?>