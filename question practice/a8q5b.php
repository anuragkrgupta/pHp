<?php
//fwrite//
$fptr=fopen("yo.txt","w");
fwrite ($fptr,"goodbye");
fclose($fptr);
?>