<?php
$arr=array(1,2,3);
$search=2;
for($i=0;$i<sizeof($arr);$i++)
{
    if ($arr[$i]==$search)
    {
        echo $search." is present at position ".$i;
        break;
    }
}
?>