<?php
  $conn=mysqli_connect("localhost","root","","AArIT_Store_managment_system_new");
if($conn->connect_error){
     echo("connection error");
     die("Connection failed: ".$conn->connect_error);
 }
 ?>