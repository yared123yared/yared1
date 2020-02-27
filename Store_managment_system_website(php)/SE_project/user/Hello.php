<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="global.css">
<link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="jquery-3.4.1.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>

<section class="bg">

		<section class="row justify-content-center bg">
			<img src="wallnew2.png" class="col-12 col-sm-12 row">
			<section class="col-12 col-sm-6 col-md-3">
				<form class="form-container" action="login.inc.php" method="POST">
						<h3>Sign In</h3>
					  <div class="form-group">
					    <label for="username">User Name</label>
					    <input type="text" class="form-control" name="username" aria-describedby="usernameHelp" placeholder="User Name">
					    <small id="usernameHelp" class="form-text text-muted">
					    	<!-- We'll never share your username with anyone else. -->
					    </small>
					  </div>
					  <div class="form-group">
					    <label for="password">Password</label>
					    <input type="password" class="form-control" name="password" placeholder="Password">
					  </div>
					  <div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
					  </div>
					  <div class="form-group">
						  <button type="submit" name="submit" class="btn btn-primary col-12">Login</button>				  	
					  </div>

					  <div class="form-group">
						  <button onclick="signup()" id="Register"type="Register" name="Register" class="btn btn-secondary col-12">Register</button>				  	
					  </div>

					</form>
				</section>
			</section>
</section>
</body>
</html>