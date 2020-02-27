<?php
session_start();
$user_name=$_SESSION["username"];
 $item_name=$_GET["name"];
 $brand_name=$_GET["brand"];
 $cat_name=$_GET["cat"];
$date=$_GET["dt"];
$descriptin=$_GET["desc"];
$null="";
$owner="null";
$t_at="null";
// echo($item_name);
// echo($brand_name);
// echo($cat_name);
// echo($date);
// echo($descriptin);
$var1='';
// sudo killall mysqld

include('connection.php');


$sqll="insert into stock(stock_name,brand_name,category_name,describtion,added_by,date,owner,taken_status) values('$item_name','$brand_name','$cat_name','$descriptin','$user_name','$date','$owner','$t_at')";

// $descr="hey kal";
// $sql="insert into TEST  values('$descr')";
$result=mysqli_query($conn,$sqll);

// echo("fine");
include('stock.php'); 
 
 
 
 
 ?>