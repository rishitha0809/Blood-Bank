<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exchange Blood List</title>
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
			<h2>Exchange Blood List</h2>
			<center>
				<div id="form">
					<table>
						<tr>
							<td> <center><b><font color="blue"> Name </font></b> </center> </td>
							<td> <center><b><font color="blue"> Relative Name </font></b> </center> </td>
							<td> <center><b><font color="blue">Address</font></b> </center> </td>
							<td> <center><b><font color="blue">city</font> </b> </center> </td>
							<td> <center><b><font color="blue">age</font> </b> </center> </td>
							<td> <center><b><font color="blue">Blood group</font> </b> </center> </td>
							<td> <center><b><font color="blue">Exchange Blood group</font> </b> </center> </td>
							<td> <center><b><font color="blue">Email</font> </b> </center> </td>
							<td> <center><b><font color="blue">Ph.No</font> </b> </center> </td>
						</tr>
						<tr>
							<?php 
							$q=$db->query("SELECT * FROM exchange_b");
							while($r1=$q->fetch(PDO::FETCH_OBJ)){
								?>
						    <tr>
							   <td><center><?= $r1->name; ?> </center> </td>
							   <td><center><?= $r1->rname; ?></center> </td>
							   <td><center><?= $r1->address;?></center> </td>
							   <td><center><?= $r1->city; ?></center> </td>
							   <td><center><?= $r1->age; ?></center> </td>
							   <td><center><?= $r1->bgroup; ?></center> </td>
							   <td><center><?= $r1->ebgroup; ?></center> </td>
							  <td><center><?= $r1->email; ?></center> </td>
							  <td><center><?= $r1->pno; ?></center> </td>
						   </tr>
						   <?php
							}
							 ?>
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