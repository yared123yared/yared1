<?php
	session_start();
if(isset($_POST['Register'])) {
	header("Location: signUp.php?Signup=notSubmited");
	exit();

	# code...
}


elseif(isset($_POST['submit'])){
		include_once 'storeKeeper/connection.php';

		$username=mysqli_real_escape_string($conn,$_POST['username']);
		$password=mysqli_real_escape_string($conn,$_POST['password']);

		if(empty($username)||empty($password)){
				header("Location: index.php?Login=empty");
					exit();
		}
		else{
		$sql="SELECT * FROM user WHERE uname='$username'";

		$result=mysqli_query($conn,$sql);
		$checkResult=mysqli_num_rows($result);
		if ($checkResult<1) {
		header("Location: index.php?Login=error1");
		exit();
		}
		else{
		if ($row=mysqli_fetch_assoc($result)) {
			# code...

			if (password_verify($password,$row['password'])) {
				# code...
				header("Location: index.php?Login=error2");
				exit();
			}
			else{
					$role=strtolower($row['role']);
					$_SESSION["username"]=$row['uname'];
					$_SESSION["password"]=$row['password'];
					if (strcmp($role, "store_keeper")==0) {
						header("Location: storeKeeper/storeKeeper.html?Login=Success");
					exit();	
					}
					else{header("Location: user/home_user.php?Login=Success");
					exit();
						 }
			}
			
		}
		}
		}
		}
	else{
	header("Location: index.php?Login=notclicked");
	exit();
}



 