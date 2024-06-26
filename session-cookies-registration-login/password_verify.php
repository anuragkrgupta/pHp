<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="password_verify.php" method="post">
        username: <input type="text" name="username"><br>
        password: <input type="text" name="password"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php 
require "dbconnect.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Plaintext password entered by the user 
    // $plaintext_password = "Password@123"; 
    $plaintext_password=$_POST['password'];
    $username=$_POST['username'];
    $sql1="SELECT * FROM `information` where username='$username'";
    $res=mysqli_query($con,$sql1);
    if(mysqli_num_rows($res)>0){
        echo "correct username";
        while($row = mysqli_fetch_assoc($res)) { 
            $hash=$row["password"];
        } 
        // The hashed password retrieved from database 
        echo $hash."<br>";
        //password entered by user
         echo $plaintext_password."<br>";

        // Verify the hash against the password entered 
        $verify = password_verify($plaintext_password, $hash); 

        // Print the result depending if they match 
        if ($verify) { 
        	echo 'Password Verified!'; 
        } else { 
        	echo 'Incorrect Password!'; 
        } 
    }   
    else{
        echo "incorrect username";
    }
}
else{
    echo "technical error";
}
?> 
