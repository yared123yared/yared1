<?php
// echo("heyy");
   
session_start();
// echo($_SESSION["username"]);
session_unset();
session_destroy();
// echo($_SESSION["username"]);
include('../index.php');


?>