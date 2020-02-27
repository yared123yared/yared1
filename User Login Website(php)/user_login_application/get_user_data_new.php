<?php
session_start();
$user_name=$_SESSION["username"];
include('connection.php');
 $sql="SELECT * FROM user where email='$user_name'";
 $result=$conn->query($sql);
 $data=array();
 while ($row = $result -> fetch_assoc()) {
     $data[]=$row;
 }


 echo json_encode($data);



 ?>
 
 