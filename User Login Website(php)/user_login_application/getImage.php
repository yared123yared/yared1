<?php 
include('connection.php');
$yared="select image from image where keyy='$user_name'";
     $result3=mysqli_query($conn,$yared);
     while ($row = $result3 -> fetch_assoc()) {
         include('home_user.php');
        echo '<img height="30" width="30" src="data:image;base64,'.$row['image'].'">';
    
       }

?>