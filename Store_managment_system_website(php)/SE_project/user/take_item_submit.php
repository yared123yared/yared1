<?php
session_start();

// echo("i am on the echo");

//     echo("i am in the function");

    // Check if we have parameters w1 and w2 being passed to the script through the URL

    if (isset($_GET["w1"])) {

  

       // Put the two words together with a space in the middle to form "hello world"

       $hello = $_GET["w1"];
        // echo($hello);
        // 
  
include('connection.php');
$user=$_SESSION["username"];
$date='2019-1-1';
$sqll="insert into taken_item(item_id,user_name,date) values('$hello','$user',$date)";
$sqlll="UPDATE stock set taken_status='yes' where item_id='$hello'";

$result=mysqli_query($conn,$sqll);
$result=mysqli_query($conn,$sqlll);

// echo("fine");
include('notification.php');
 
 
 
        // 
  
       // Print out some JavaScript with $hello stuck in there which will put "hello world" into the javascript.

   

 }?>