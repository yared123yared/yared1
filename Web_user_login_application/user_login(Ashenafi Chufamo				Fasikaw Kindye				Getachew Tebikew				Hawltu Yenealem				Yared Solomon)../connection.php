<?php
  $conn=mysqli_connect("localhost","root","","LLogin_USER_NEW");
if($conn->connect_error){
     echo("connection error");
     die("Connection failed: ".$conn->connect_error);
 }
 ?>