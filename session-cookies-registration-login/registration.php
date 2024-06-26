<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "registration.php" method="post"> 
        username: <input type="text" name="user"><br> 
        password: <input type="password" name="pwd"><br> 
        <input type="submit" value = "submit"> 
</form>
</body>
</html>
<?php
$serverName="localhost";
$userName="root";
$password="";
$databasename="student";
$con=mysqli_connect($serverName,$userName,$password,$databasename);
if($con){
    echo"connection done successfully.";
}
else{
    echo"connection not done";
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['user'])&&isset($_POST['pwd'])){
        $user = $_POST['user'];
        $pwd1 = $_POST['pwd'];
        $hash=password_hash($pwd1,PASSWORD_DEFAULT);
        $result="INSERT INTO `information` (`username`, `password`) VALUES ('$user', '$pwd1')";
        mysqli_query($con,$result);
    }
}
?>

