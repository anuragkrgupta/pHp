<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="get_post_Req.php" method="post">
        Username:<input  type="text" required name="User1"><br>
        Password :<input type="password" required name="P1"><br>
        <input type="submit" value="SUBMIT">
    </form>
    <form action="get_post_Req.php" method="get">
    <a href="get_post_Req.php?stdname=Ankit&age=21&sec=B">Click here</a>
</form>
</body>
</html>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['User1'])&&  isset($_POST['P1'])) {
            $uuSS1=$_POST["User1"];
            $ppSS1=$_POST["P1"];
            echo"
            <script>
            alert('Your Username=".$uuSS1." and password=".$ppSS1." is submitted successfully');
            </script>";
    }
}
?>
<?php
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['stdname'])&&  isset($_GET['age'])&& isset($_GET['sec'])) {
            $nnmm1=$_GET["stdname"];
            $agg1=$_GET["age"];
            $secc=$_GET["sec"];
            echo"
            <script>
            alert('Your Student Name=".$nnmm1." and age=".$agg1." and sec = ".$secc." is fetched successfully');
            </script>";
    }
}
?>
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
    echo "<br> Sorry! Connection Not Done";
}/*lambu ankit bhadwaaaaaaaaaaaaaaaaa with 2 cheda :)*/
?>