<?php
function sortArray($arr)
{
    sort($arr);
    return $arr;
}
$unsortedArray = [5, 3, 1, 4, 2];
$sortedArray = sortArray($unsortedArray);
print_r($sortedArray);
?>