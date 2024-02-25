<?php

include_once("config.php");


$sql = "SELECT DISTINCT name, phone_no, username, address
		FROM signupworker
		where working_as like 'Web_Designer'
		";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>View Web Designer List</title>
	<style>
	
	body{
		background-image: url("pics/web_design.jpeg");
		background-attachment: fixed;
		background-repeat: no-repeat;
		background-size: cover;
	}
	table{
		width: 800px;
		margin: auto;
		text-align: center;
		table-layout: fixed;
	}
	table, tr, th, td{
		padding: 20px;
		color: white;
		border: 1px solid #080808;
		border-collapse: collapse;
		font-size: 18px;
		font-family: Arial;
		background: linear-gradient(top, #3c3c3c 0%, #222222 100%);
		background: -webkit-linear-gradient(top, #3c3c3c 0%, #222222 100%)
	}
	h1{
		color: red;
		text-transform: uppercase;
		font-weight: 900;
		text-align: center
	}
	
	
	
	
		
	</style>
</head>


<body>

	<h1>Web Designers Information</h1>

	<table>

    <tr>
		<th>Name</th>
		<th >Phone Number</th>
		<th >Username</th>
		<th>Address</th>
	</tr>

	<?php 
	while($res = mysqli_fetch_array($result)) { 
	?>
		<tr>	
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['phone_no'];?></td>	
		<td><?php echo $res['username'];?></td>			
        <td><?php echo $res['address'];?></td>
		</tr>

	<?php	
		}
	?>

	</table>



</body>
</html>