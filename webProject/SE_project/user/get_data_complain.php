<?php
session_start();
include('connection.php');
$value=$_SESSION["username"];
 $sql="SELECT * FROM complains where user_name='$value'";
 $result=$conn->query($sql);
 $data=array();
 while ($row = $result -> fetch_assoc()) {
     $data[]=$row;
 }


 echo json_encode($data);



 ?>
 
 