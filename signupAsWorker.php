<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Sign Up As Worker</title>
		<link rel = "stylesheet" href = "styleForSignup.css">
	</head>
	
	<body>
	
		<div class="box">
			<form action="" method="post" name="">
				<p>*fill this form with valid informations!</p>
				
				<input type="text" name="name" placeholder="Name" required>
				<input type="text" name="phone_no" placeholder="Phone Number" required>
				<input type="text" name="username" placeholder="Username" required>
				<input type="Password" name="password" placeholder="Password" required>
				<h4 style = "font-align:left; font-weight:100;">Choose Your Working Preference</h4>
				<input type="radio" name="working_as" value="Home_Tutor">Home Tutor<br />
				<input type="radio" name="working_as" value="Web_Designer">Web Designer<br />
				<input type="text" name="address" placeholder="Address" required>
				<input type="submit" name="signup" value = "Sign Up">
				<a href="Find_Worker.html">Home</a>
			</form>
		</div>
		
<?php
	include_once("config.php");

	if(isset($_POST['signup'])) {	
	
	$name = $_POST['name'];
	$phone_no = $_POST['phone_no'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$working_as = $_POST['working_as'];
	$address = $_POST['address'];
	$signup = $_POST['signup'];

	
				
	$sql = "INSERT  INTO signupworker(name, phone_no, username, password, working_as, address) 
								VALUES('$name', '$phone_no', '$username', '$password', '$working_as', '$address')";
	
	$result = mysqli_query($conn, $sql);

	echo header("Location: signupSuccessful.html"); 

	if (!mysqli_query($conn, $sql)) {
    echo "Error: " . mysqli_error($conn);
}
		
	}


?>
	</body>
</html>