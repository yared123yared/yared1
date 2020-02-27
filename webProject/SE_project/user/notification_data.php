<?php
session_start();

include('connection.php');
$value=$_SESSION["username"];
 $sql="SELECT * FROM stock where owner='$value'";
 $result=$conn->query($sql);
 $data=array();
 while ($row = $result -> fetch_assoc()) {
     $data[]=$row;
 }


 echo json_encode($data);



 ?>
 
 