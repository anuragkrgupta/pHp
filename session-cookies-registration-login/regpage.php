<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registration Page</title>
</head>

<body>
    <h1>Registration Page</h1>
    <form action="RegPage.php" method="post">
        <div class="form-group">
            <label for="exampleInputName">User Name</label>
            <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Your Name" Required name='UN1'>
            
        </div>
        <div class="form-group">
            <label for="exampleInputFatName">User Father Name</label>
            <input type="text" class="form-control" id="exampleInputFatName" aria-describedby="emailHelp" placeholder="Enter Your Father Name" Required name='UFN1'>
            
        </div>
        <div class="form-group">
            <label for="exampleInputDOB">User DOB</label>
            <input type="date" class="form-control" id="exampleInputDOB" aria-describedby="emailHelp" placeholder="Enter Your DOB" Required name='UDOB1'>
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password" Required name='UP1'>
        </div>
        <div class="form-group">
            <label for="exampleInputMobile">Mobile Number</label>
            <input type="tel" class="form-control" id="exampleInputMobile" aria-describedby="emailHelp" placeholder="Enter Your Mobile Number" Required name='UM1'>
            
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email" Required name='UE1'>
            
        </div>
        
        <input type="submit" class="btn btn-primary" value="Registration">
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<?php
    require "dbconnect.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['UN1']) &&
            isset($_POST['UFN1']) &&
            isset($_POST['UDOB1']) && 
            isset($_POST['UP1']) &&
            isset($_POST['UM1']) &&
            isset($_POST['UE1'])
        ){
            $uuNN1=$_POST['UN1'];
            $uuFN1=$_POST['UFN1'];
            $uuDOB1=$_POST['UDOB1'];
            $uuPS1=$_POST['UP1'];
            $uuM1=$_POST['UM1'];
            $uuE1=$_POST['UE1'];

            $insQur1="insert into `reginfo` values ('$uuNN1','$uuFN1','$uuDOB1','$uuPS1','$uuM1','$uuE1')";
            $exc1=mysqli_query($con,$insQur1);
            if($exc1){
                echo "
                    <script>
                        alert('Registration done Successfully.');
                    </script>
                ";
            }
            else {
                echo "
                    <script>
                        alert('Sorry! Registration Not done !!');
                    </script>
                ";
            }
        }

    }
?>