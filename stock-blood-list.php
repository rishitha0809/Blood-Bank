<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stock Blood List</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
		td{
			width: 200px;
			height: 40px;
		}
	</style>
</head>
<body>
<div class="full">
	<center>
		<div id="inner_full">
		<div id="header" style="width:100%">
			<center>
				<h2><a href="bbms-home.php" style="text-decoration: none; color:balck;">Blood Bank Management System</a></h2>
			</center>
		</div>
		<div id="body">
			<br>
			<?php
			$un=$_SESSION['un'];
			if(!$un){
				header("Location:index.php");
			}
			?>
			<h2>Stock Blood List</h2>
			<center>
				<div id="form">
					<table>
						<tr>
							<td> <center><b><font color="blue"> Blood group </font></b> </center> </td>
							<td> <center><b><font color="blue">Quantity</font></b> </center> </td>
						</tr>
						<tr>
							 <td><center>B+ </center> </td>
							 <td><center>
							 	<?php 
							 	$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B+' ");
							 	echo $row=$q->rowCount();
							 	 ?>
							 </center> </td>
						</tr>
						<tr>
							 <td><center>B- </center> </td>
							 <td><center>
							 	<?php 
							 	$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B-' ");
							 	echo $row=$q->rowCount();
							 	 ?>
							 </center> </td>
						</tr>
						<tr>
							 <td><center>A+ </center> </td>
							 <td><center>
							 	<?php 
							 	$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A+' ");
							 	echo $row=$q->rowCount();
							 	 ?>
							 </center> </td>
						</tr>
						<tr>
							 <td><center>A-</center> </td>
							 <td><center>
							 	<?php 
							 	$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A-' ");
							 	echo $row=$q->rowCount();
							 	 ?>
							 </center> </td>
						</tr>
						<tr>
							 <td><center>AB+ </center> </td>
							 <td><center>
							 	<?php 
							 	$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+' ");
							 	echo $row=$q->rowCount();
							 	 ?>
							 </center> </td>
						</tr>
						<tr>
							 <td><center>AB- </center> </td>
							 <td><center>
							 	<?php 
							 	$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-' ");
							 	echo $row=$q->rowCount();
							 	 ?>
							 </center> </td>
						</tr>
						<tr>
							 <td><center>O+ </center> </td>
							 <td><center>
							 	<?php 
							 	$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+' ");
							 	echo $row=$q->rowCount();
							 	 ?>
							 </center> </td>
						</tr>
						<tr>
							 <td><center>O- </center> </td>
							 <td><center>
							 	<?php 
							 	$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O-' ");
							 	echo $row=$q->rowCount();
							 	 ?>
							 </center> </td>
						</tr>
						
					</table>
				</div>
			</center>
			
		</div>
		<div id="footer" style="width:100%">
			<h4 align="middle"> write anything</h4>
			<p align="center"><a href="logout.php"><font color="blue"> Logout</font></a> </p>
		</div>
	</div>
	</center>
</div>
</body>
</html>
