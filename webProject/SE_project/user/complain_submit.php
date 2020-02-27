<?php
session_start();
$value=$_SESSION["username"];
// echo("welcome to the complain Submit Class");

 $complain=$_GET["complain"];
 $date=$_GET["bday"];




// sudo killall mysqld

include('connection.php');


$sql="insert into complains(user_name,complain,complain_date) values('$value','$complain','$date')";

$result=mysqli_query($conn,$sql);

// echo("fine");
include('complain.php');

 
 
 
 
 ?>