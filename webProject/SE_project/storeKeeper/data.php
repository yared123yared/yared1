<?php
echo("welcome to thise php");

  include('connection.php');
 $sql="SELECT * FROM user";
 $result=$conn->query($sql);
 $data=array();
 while ($row = $result -> fetch_assoc()) {
     $data[]=$row;
 }


 echo json_encode($data);



 ?>
