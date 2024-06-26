<!-- code for sql injection: 'or'1'='1 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
    username: <input type="text" name="us"><br>
    password: <input type="password" name="pw"><br>
    <input type="submit" value="submit">
    </form>

</body>
</html>


<?php
$serverName='localhost';
$userName='root';
$password='';
$DBName='student1';
$con=mysqli_connect($serverName,$userName,$password,$DBName);
if ($con) {
    echo "<br>Connection Done Successfully.";
}
else{
    echo "<br>Sorry! Connection not Done !!";
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['us']) && isset($_POST['pw'])){
        $var1=$_POST['us'];
        $var2=$_POST['pw'];

       $sql="SELECT * FROM `information` where username='$var1' and password='$var2'";

       $result=mysqli_query($con,$sql);
       $row=mysqli_num_rows($result);
       if($row){
        echo "login succesfull";
       }
       else{
        echo "incorrect password";
       }
    }

}
else{
    echo "technical error";
}
?>