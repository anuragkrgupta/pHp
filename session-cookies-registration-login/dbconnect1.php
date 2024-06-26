<?php
$servername="localhost";
$username="root";
$password='';
$databaseName='phpdbbca1';
$con=mysqli_connect($servername,$username, $password,$databaseName);
if($con)
{
    echo "Connection done successfully!<br>";
}
else{
    echo "Sorry! Connection Not Done";
}
?>