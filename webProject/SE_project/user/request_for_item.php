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
$sqll="insert into requested_item(user_name,item_id,request_date) values('$user','$hello','$date')";

$result=mysqli_query($conn,$sqll);

// echo("fine");
include("item.php");
 
 
 
        // 
  
       // Print out some JavaScript with $hello stuck in there which will put "hello world" into the javascript.

   

 }?>