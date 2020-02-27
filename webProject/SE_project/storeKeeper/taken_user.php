<?php

include('connection.php');
 $sql="SELECT fname,lname,uname,user_name,item_id,take_no from user join taken_item where user.uname=taken_item.user_name";
 $result=$conn->query($sql);
 $data=array();
 while ($row = $result -> fetch_assoc()) {
     $data[]=$row;
 }


 echo json_encode($data);



 ?>
