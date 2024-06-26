<?php
session_start();
$user1=$_SESSION['user'];
$pwd1=$_SESSION['password'];
echo "user name ".$user1." has logined with password ".$pwd1;
?>