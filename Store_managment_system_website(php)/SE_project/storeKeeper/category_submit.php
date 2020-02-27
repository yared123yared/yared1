<?php
session_start();
// echo("welcome to the brand_submit_class");

 $category_name=$_GET["cat_name"];
 $category_date=$_GET["cday"];
 $description=$_GET["desc"];
 $user_name="atr/8590/10";


// echo($category_name);
// echo($category_date);
// echo($description);
// echo($user_name);

// sudo killall mysqld

include('connection.php');


$sqll="insert into category(Descripton) values('Ssmnbdmnsb)";


$result=mysqli_query($conn,$sqll);

// echo("fine");
include('category.php'); 
 
 
 
 
 ?>