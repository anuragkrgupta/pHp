<?php
for ($i=0; $i<=9; $i++)
{
    echo $i+1 .",";
}
$i=0;
while($i<=9)
{
    echo $i+1 ." ";
    $i++;
}
echo "<br>";
$i=0;
do
{
    echo $i+1 ." ";
    $i++;
} while($i<=9);
?>