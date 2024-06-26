<?php
function reverseString($str)
{
    return strrev($str);
}
$originalString = "Hello, World! ";
$reversedString = reverseString($originalString);
echo "Original: $originalString <br> Reversed: $reversedString";
?>