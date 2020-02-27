<?php 
echo("welcome to php");
   $fn  = $_POST['value'];
   
   $file = fopen("/opt/lampp/htdocs/callPHP/".$fn.".record","w");
   echo fwrite($file,$str);
   fclose($file);
?>