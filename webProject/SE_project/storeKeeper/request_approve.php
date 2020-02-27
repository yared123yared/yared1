<?php
session_start();

// echo("i am on the echo");

//     echo("i am in the function");

    // Check if we have parameters w1 and w2 being passed to the script through the URL

    if (isset($_GET["w1"]) && isset($_GET["w2"])) {
        // echo("thise is the inner if");

  

       // Put the two words together with a space in the middle to form "hello world"
       $own = $_GET["w2"];
       $item_d = $_GET["w1"];
        // echo($item_d);
        // echo($own);
        // 
  
include('connection.php');

$user_name=$_SESSION["username"];
// echo($user_name);
    $sqll="UPDATE requested_item set aproved='yes',approved_by='$user_name',aprove_date='2019-11-10' where item_id='$item_d'";
    $sqlll="UPDATE stock set owner='$own' where item_id='$item_d'";

$result=mysqli_query($conn,$sqll);

$result=mysqli_query($conn,$sqlll);

// echo("fine");
include('request.php');
 
 
 
        // 
  
       // Print out some JavaScript with $hello stuck in there which will put "hello world" into the javascript.

   

 }?>