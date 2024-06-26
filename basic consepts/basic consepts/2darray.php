<?php
$Marray1=array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
echo "First matrice: <br>";
foreach($Marray1 as $value1)
{
    foreach($value1 as $value)
    {
        echo $value." ";
    }
    echo"<br>";
}
echo "Second martice: <br>";
$Marray2=array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
foreach($Marray2 as $value1)
{
    foreach($value1 as $value)
    {
        echo $value." ";
    }
    echo"<br>";
}
echo "Matrix addition <br>";
for($i=0 ; $i<count($Marray2);$i++)
{
    for($j=0 ; $j<count($Marray1[$i]);$j++)
    {
        echo $Marray1[$i][$j]+$Marray2[$i][$j]."&nbsp&nbsp&nbsp";
    }
}
?>