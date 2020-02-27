<?php
  $conn=mysqli_connect("localhost","root","","Store_AAIT_new");
if($conn->connect_error){
     echo("connection error");
     die("Connection failed: ".$conn->connect_error);
 }
 ?>