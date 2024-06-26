<?php
$v1=10;
$v2=36;

//function

function fn1(){  //function
$v3=78;
echo "The value under v3 is $v3";
echo "<br>The value under v2 is ".$GLOBALS['v2']." and The value under v1 is ".$GLOBALS['v1'];
}
fn1( );
?>