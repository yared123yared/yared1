<?php

include('connection.php');
 $sql="SELECT* from requested_item";
 $result=$conn->query($sql);
 $data=array();
 while ($row = $result -> fetch_assoc()) {
     $data[]=$row;
 }


 echo json_encode($data);



 ?>
