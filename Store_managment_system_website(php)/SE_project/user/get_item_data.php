<?php
include('connection.php');
$value='null';
 $sql="SELECT * FROM stock where owner='$value'";
 $result=$conn->query($sql);
 $data=array();
 while ($row = $result -> fetch_assoc()) {
     $data[]=$row;
 }


 echo json_encode($data);



 ?>
 
 