

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.min.js"></script> 
		<script src="jquery-3.4.1.js"></script>
		<script  src="bootstrap-validate.js"></script>
	<link rel="stylesheet" type="text/css" href="global.css">
	<script src="new_login.js"></script>
        
</head>
<body>
<section class="bg float-center">
<button  id="register"  onclick="register()" class="btn btn-primary col-12">Register</button>				  	
		

		<section class="row justify-content-center bg">
			<img src="wallnew2.png" class="col-12 col-sm-12 row">
		
			<section class="col-12 col-sm-6 col-md-3">
				
			<form class="form-container" action="get_user_data.php"  method="GET">

			
						<h3>Sign In</h3>
					  <div class="form-group">
					    <label for="username">User Name</label>
					    <input  id="name" type="text" class="form-control" name="username" aria-describedby="usernameHelp" placeholder="User Name">
					    <small id="usernameHelp" class="form-text text-muted">
					    	<!-- We'll never share your username with anyone else. -->
					    </small>
					  </div>
					  <div class="form-group">
					    <label for="password">Password</label>
					    <input id="pass" type="password" class="form-control" name="password" placeholder="Password">
					  </div>
					  <div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
					  </div>
						<div  class="form-group">
											
											<button id="login"   onclick="submit()" class="btn btn-primary col-12">Login</button>				  	
										</div>     
					</form>
				
				
                    
               <script src="new_login.js"></script>
                     
				</section>
			</section>
</section>
</body>
</html>
<?php


?>
