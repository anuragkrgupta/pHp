<?php
//Plaintext password entered by the user
$plaintext_password="Password@123";
//The hashed password retrieved from database
$hash="$2y$10$8sA2N5Sx/1zMQv2yrTDAaOFlbGWECrrgB68axL.hBb78NhQdyAqWm";
//verify the hash against the password entered
$verify =password_verify($plaintext_password,$hash);

if($verify){
    echo"password verified";

}
else{
    echo"Incorrect password";
}
?>