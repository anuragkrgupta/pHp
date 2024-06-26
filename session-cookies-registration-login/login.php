<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login Page</title>
</head>

<body>
    <h1>Login Page</h1>
    <form action="login.page" method="post">
        username:<input type="text" name="user"><br>
        password:<input type="password" name="password"><br>
        <input type="submit" value="submit">
    </form>


    <form action="login.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email" Required name='Em1'>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" Required name='Ps1'>
        </div>
        
        <input type="submit" class="btn btn-primary" value="Login">
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
require 'dbconnect.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if
    (
        isset($_POST['user'])&&
        isset($_POST['password'])
    )
    {
        $em=$_POST["user"];
        $ps=$_POST["password"];

        $qur1="select * from `information` where `username`='$em'";
        $exc1=mysqli_query($connection,$qur1);
        $rowCnt = mysqli_num_rows($exc1);
        if($rowCnt==1)
        {
       $row=mysqli_fetch_array($exc1);
       while($row){
           if(password_verify($ps,$row['password']));
           echo "login succesfully";
          
       }
        }
    }
}
?>
