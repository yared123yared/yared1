<?php
include('connection.php');
 $sql="SELECT stock_name,brand_name,category_name,item_id from stock join taken_item where stock.item_id!=taken_item.item_id";
 $result=$conn->query($sql);
 $data=array();
 while ($row = $result -> fetch_assoc()) {
     $data[]=$row;
 }


 echo json_encode($data);



 ?>
