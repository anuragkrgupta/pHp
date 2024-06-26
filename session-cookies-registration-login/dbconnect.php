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
    echo "Sorry! Connection Not Done";
}
$cT="create table `bcaPHP1`(`RegNO` int(10),`stdName` varchar(30),`stdAge` int(2), primary key(`RegNO`))";
$exc = mysqli_query($con, $cT);
if ($exc) {
    echo "Table Created Successfully! <br> ";
} else {
    echo "Sorry  Table could not be created. Please try again.<br>";
}
$ib="insert into `bcaPHP1` values (123,'LJ',23),(12,'kl',24),(13,'JH',25)";
$exc2 = mysqli_query($con, $ib);
if ($exc2) {
    echo "Insertion done! <br> ";
} else {
    echo "Insertion not done.";
}

//update
$up="update `bcaPHP1` set `stdName`='KL Rahul' where  `RegNO`=123";
$exc1 = mysqli_query($con, $up);
if ($exc1) {
    echo "Update done! <br> ";
} else {
    echo "Update not done.";
}
//Delete the table
$de="delete from `bcaPHP1` where `RegNO`=13";
$exc3 = mysqli_query($con, $de);
if ($exc3)
{
    echo "Deletion done <br>";
}
else {
    echo "<br>Deletion not done";
}
//Drop
$cr="Drop table `bcaPHP1`";
$exc4 = mysqli_query($con, $cr);
if($exc4){
echo "Table Dropped<br>";  
}
else{
    echo "Table not dropped";
}
?>