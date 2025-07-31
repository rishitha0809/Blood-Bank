<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="s1.css">
</head>
<body>
<div class="full">
	<div id="inner_full">
		<center>
			<div id="header" style="width:125%">
			<h2><a href="bbms-home.php" style="text-decoration: none;">Blood Bank Management System</a></h2>
		</div>
		<div id="body">
			<br>
			<?php
			$un=$_SESSION['un'];
			if(!$un){
				header("Location:index.php");
			}
			?>
			<h2 class="welcome">welcome</h2>
			<br>
			<ul class="menu">
				<li><a href="donor-reg.php">Donor Registration</a> </li>
				<li><a href="donor-list.php">Donor List</a> </li>
				<li><a href="stock-blood-list.php">Stock Blood List</a> </li>
			</ul>
			<ul class="menu">
				<li><a href="out-stock-blood-list.php">Out Stock Blood List</a> </li>
				<li><a href="exchange-blood-list.php">Exchange Blood Registration</a> </li>
				<li><a href="exchange-blood-list1.php">Exchange Blood List</a> </li>
			</ul>
		</div>
		<div id="footer" style="width:125%">
			<h4 > write anything</h4>
			<p ><a href="logout.php"><font color="blue"> Logout</font></a> </p>
		</div>
		</center>
	</div>
</div>
</body>
</html>
