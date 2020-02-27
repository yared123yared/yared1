<?php
session_start();
session_destroy();
echo(" thise is the log out class");
echo($_SESSION["username"]);
   if(isset($_POST['submit'])){
   	session_start();
   	session_unset();
   	session_destroy();
   	header("Location: index.php");
   	exit();
   }
   
   echo($_SESSION["username"]);
//    session_start();
   include("index.php");
   echo($_SESSION["username"]);
   ?>