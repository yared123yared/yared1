<?php
session_start();
// echo("hey dude");
$password=$_GET["password"];
$user_name=$_GET["username"];
// echo($password);
$password=md5($password);
// echo($password);
$password_enc=md5($password);
// $lastname = json_decode($_POST['yared']);
// echo($lastname);

include('connection.php');
 $sql="SELECT * FROM user where email='$user_name'&& password='$password'";
 $result=$conn->query($sql);
 if($result -> fetch_assoc()){
    //  echo("welcom to the user");
     
       include('home_user.php');
      
     $_SESSION["username"]=$user_name;
    // $data=array();
    // while ($row = $result -> fetch_assoc()) {
    //     $data[]=$row;
    // }
    
 }else{
    echo("incorrect user name or password");
     
     include('index.php');
 }
 






 ?>

 
