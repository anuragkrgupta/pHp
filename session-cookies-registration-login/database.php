<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="database.php" method="post">
        database name: <input type="text" name="databasename2">
        Table Name:<input type="text" name="person">
        <input type="submit" value="submit">
    </form>
</body>
</html>




<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['databasename2'])&&isset($_POST['person'])){
       $db1= $_POST['databasename2'];
       $p1=$_POST['person'];
$serverName="localhost";
$userName="root";
$password="";
$con=mysqli_connect($serverName,$userName,$password);
if($con){
    echo "connection successful";
}
else{
    echo "connection failed";
}
$sql="CREATE DATABASE $db1";
mysqli_query($con,$sql);
$database=$db1;
$con=mysqli_connect($serverName,$userName,$password,$database);
$sql="CREATE TABLE $p1
(
    PersonID int(10),
    LastName varchar(255),

    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
);";
mysqli_query($con,$sql);
    }
}
?>