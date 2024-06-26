<?php
$a=1634;
$d=0;
$sum=0;
$n=$a;
$c=0;
while($n>0)
{
    $c++;
    $n=(int)($n/10);
}
$n1=$a;
while($n1!=0)
{
    $d=$n1%10;
    $sum=$sum+$d**$c;
    $n1=$n1/10;
}
if ($sum==$a)
{
    echo " the number is armstrong";
}
else{
    echo "Not a armstrong number";
}
?>