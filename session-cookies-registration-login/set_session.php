<?php
session_start();
$user="rahul";
$pwd="1234";
$_SESSION['user']=$user;
$_SESSION['password']=$pwd;

echo "session start successfully";
echo "<a href=fetch_session.php>click here</a>";
?>