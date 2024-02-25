<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Urgent Need</title>
		<link rel = "stylesheet" href = "styleForSignup.css">
	</head>
	
	<body>
	
		<div class="box">
			<form action="" method="post" name="">
				<p>Urgent Need!</p>
				<input type="text" name="name" placeholder="Name">
				<input type="text" name="phone_no" placeholder="Phone No">
				<h4 style = "font-align:left; font-weight:100;">Looking For</h4>
				<input type="radio" name="looking_for" value="Home_Tutor">Home Tutor<br />
				<input type="radio" name="looking_for" value="Web_Designer">Web Designer<br />
				<input type="text" name="address" placeholder="Address">
				<input type="submit" name="submit" value = "Submit">
				<a href="mainpageForUser.php">Back</a>
			</form>
		</div>
		
	
	<?php
	include_once("config.php");

	if(isset($_POST['submit'])) {	
	
	$name = $_POST['name'];
	$phone_no = $_POST['phone_no'];
	$looking_for = $_POST['looking_for'];
	$address = $_POST['address'];
	
				
	$sql = "INSERT  INTO quickaccess(name, phone_no, looking_for, address) 
								VALUES('$name', '$phone_no', '$looking_for', '$address')";
	
	$result = mysqli_query($conn, $sql);
	echo header("Location: successful.html"); 
		
	}


?>
	
	
		
	</body>
</html>