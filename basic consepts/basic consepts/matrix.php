<?php
$arr1= array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
echo "the matrix are :<br> ";
foreach($arr1 as $value1){
foreach($value1 as $value){
echo $value. " ";
}
echo "<br>";
}
$arr2 = array(
    array(1,2,3,4),
    array(7,8,9,10),
    array(11,12,13,14)
);
echo " the second matrix is: <br>";
foreach($arr2 as $value2){
    foreach($value2 as $value){
        echo $value." ";
    }
    echo "<br>";
}
echo "<br>";
//multiplying
for ($i=0;$i<count($arr2);$i++){
    for ($j= 0;$j<count($arr1[$i]);$j++){

        
       echo $arr1[$i][$j]*$arr2[$i][$j]."&nbsp ";
    }
echo "<br>"; 
        }
?>