<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Give Review</title>
		<link rel = "stylesheet" href = "styleForSignup.css">
	</head>
	
	<body>
	
		<div class="box">
			<form action="" method="post" name="">
				<p>Give Review</p>
				<input type="text" name="username" placeholder="Your Username" required>
				<input type="text" name="worker_username" placeholder="Other person's Username" required>
				<h4 style = "font-align:left; font-weight:100;">Work's As</h4>
				<input type="radio" name="working_as" value="home_tutor">Home Tutor<br />
				<input type="radio" name="working_as" value="web_designer">Web Designer<br />
				<input type="radio" name="working_as" value="User">User<br />
				<input type="text" name="comments" placeholder="Comments">
				<input type="submit" name="submit" value = "Submit">
				<a href="mainpageForWorker.php">Back</a>
			</form>
		</div>
		
	
	<?php
	include_once("config.php");

	if(isset($_POST['submit'])) {	
	
	$username = $_POST['username'];
	$worker_username = $_POST['worker_username'];
	$working_as = $_POST['working_as'];
	$comments = $_POST['comments'];
	
				
	$sql = "INSERT  INTO worker_review(username, worker_username, working_as, comments) 
								VALUES('$username', '$worker_username', '$working_as', '$comments')";
	
	$result = mysqli_query($conn, $sql);
	echo header("Location: successfulWorkerReview.html");
		
	}


?>
	
	
		
	</body>
</html>