<?php
$n=120;
$i=1;
do
{
  if($n%$i==0)
  {
    echo $i .",";
  }
  $i++;
}while($i<=$n);
?>