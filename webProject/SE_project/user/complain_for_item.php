<?php
session_start();

echo("i am on the echo");

  

  
include('connection.php');
$user=$_SESSION["username"];
$date='2019-1-1';
$sqll="insert into taken_item(item_id,user_name,date) values('$hello','$user',$date)";
$sqlll="UPDATE stock set taken_status='yes' where item_id='$hello'";

$result=mysqli_query($conn,$sqll);
$result=mysqli_query($conn,$sqlll);

echo("fine");
 
 
 
        // 
  
       // Print out some JavaScript with $hello stuck in there which will put "hello world" into the javascript.

   

 ?>