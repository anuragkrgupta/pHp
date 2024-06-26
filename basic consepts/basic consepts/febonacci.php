<?php
$n1 = 0;  
$n2 = 1;  
$num = 10; // Number of elements you want in the series
echo "Fibonacci Series: $n1, $n2";  

for($i = 2; $i < $num; $i++) {  
    $n3 = $n1 + $n2;  
    echo ", $n3";  
    $n1 = $n2;  
    $n2 = $n3;  
}  
?>