<?php
$IWT=array(
2241041063=>80,
2241041064=>88
);
foreach($IWT as $key=>$value)
{
    echo "the registration no . $key gets $value marks <br>";
}
echo "Modified value <br>";
foreach($IWT as $key=>&$value)
{
    echo "the registration no . $key gets ".($value-=5)." marks <br>";
}
?>