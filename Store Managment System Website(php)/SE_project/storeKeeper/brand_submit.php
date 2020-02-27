<?php
session_start();
// echo("welcome to the brand_submit_class");

 $brand_name=$_GET["brand_name"];
 $category_name=$_GET["cat"];
 $brand_date=$_GET["bday"];
 $description=$_GET["description"];
 $user_name=$_SESSION["username"];



// sudo killall mysqld

include('connection.php');


$sql="insert into brand(brand_name,added_by,date,descripton,category) values('$brand_name','$user_name','$brand_date','$description','$category_name')";

$result=mysqli_query($conn,$sql);

   include('brand.php'); 
 
 
 
 
 ?>