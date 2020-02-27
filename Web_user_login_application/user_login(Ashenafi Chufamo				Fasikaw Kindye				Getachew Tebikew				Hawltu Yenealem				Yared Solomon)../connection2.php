<?php
  $conn=mysqli_connect("localhost","root","","AStore_AAIT");
if($conn->connect_error){
     echo("connection error");
     die("Connection failed: ".$conn->connect_error);
 }
 ?>