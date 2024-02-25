<?php
include("loginUserServer.php"); 
?>

<!doctype html>
<html>

	<head>
		<meta charset = "utf-8">
		<title>Login As User</title>
		<link rel = "stylesheet" href = "styleForLoginUser.css">
	</head>
		
	<body>
	
		<form class = "box" action = "" method = "post" name = "">
			<h1>User Login</h1>
			<input type = "text" name = "username" placeholder = "Username" required>
			<input type = "password" name = "password" placeholder = "Password" required>
			<input type="submit" name = "login" value = "Login">
			<span><?php echo $error; ?></span>
			<br/><a href="forgot_password.html">Forgot password?</a><br/>
			<a href="signUpAsUser.php">Join As User</a>
		</form>	
		
	</body>

</html>