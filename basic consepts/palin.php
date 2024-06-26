<?php
$num = 121;
$str=(string)$num;
$rstr= strrev($str);  // reverse the string
if ( strcmp ($str,$rstr)==0) {
    echo "$num is palindrome.";
}
else{
    echo "$num is not a palindrome.";
}
?>