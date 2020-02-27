<?php
//  echo("welcome to the brand_submit_class");

 $full_name=$_POST["fullname"];
 $email=$_POST["email"];
 $country=$_POST["country"];
 $password=$_POST["password"];
 $password_enc=md5($password);

//  echo($password_enc);
 $Gender=$_POST["gender"];
 $position=$_POST["position"];
 $phonenumber=$_POST["phone"];
 $city=$_POST["city"];
 $descc=$_POST["description"];
 if(isset($_POST["submit"])){
    $image=addslashes($_FILES['yared']['tmp_name']);
   //  echo($image);
    $name=addslashes($_FILES['yared']['name']);
   //  echo($name);
    $image=file_get_contents($image);
    // echo($image);

    $image=base64_encode($image);
   //  echo($name);


 }

   
     
 
//  echo($full_name);
//  echo($email);
//  echo($country);
//  echo($password);
//  echo($Gender);
//  echo($position);
//  echo($phonenumber);
//  echo($descc);




// sudo killall mysqld

include('connection.php');


$sql="insert into user(name,email,country,password,gender,position,city,descripton,phonenumber) values('$full_name','$email','$country','$password_enc','$Gender','$position','$city','$descc','$phonenumber')";
$qry="insert into image(keyy,name,image)values('$email','$name','$image')";
// $yared="select image from image";
$result=mysqli_query($conn,$sql);
$result2=mysqli_query($conn,$qry);
// $result3=mysqli_query($conn,$yared);
$data=array();
//echo '<img height="300" width="300" src="data:image;base64,'.$row[2].'">';

// while ($row = $result3 -> fetch_assoc()) {
//     echo '<img height="300" width="300" src="data:image;base64,'.$row['image'].'">';

//    }
  

// echo("fine");
 
include('index.php');
 
 
 ?>