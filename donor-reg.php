<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Donor Registration</title>
	<link rel="stylesheet" type="text/css" href="s1.css">
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
			<h2>Donor Registration</h2>
			<center>
				<div id="form">
					<form action="" method="post">

					<table>
						<tr>
							<td width="200px" height="50px">Enter Name</td>
							<td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"> </td>

							<td width="200px" height="50px">Enter any blood relation Name</td>
							<td width="200px" height="50px"><input type="text" name="rname" placeholder="Enter Name"> </td>
						</tr>
						<tr>
							<td width="200px" height="50px">Enter Address</td>
							<td width="200px" height="50px"><textarea name="address" placeholder="Enter Address"></textarea> </td>
							<td width="200px" height="50px">Enter City</td>
							<td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"> </td>
						</tr>
						<tr>
							<td width="200px" height="50px">Enter Age</td>
							<td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"> </td>
							<td width="200px" height="50px">Select Blood Group</td>
							<td width="200px" height="50px">
								<select name="bgroup">
									<option>B+</option>
									<option>B-</option>
									<option>A+</option>
									<option>A-</option>
									<option>AB+</option>
									<option>AB-</option>
									<option>O+</option>
									<option>O-</option>

								</select>
							 </td>
						</tr>
						<tr>
							<td width="200px" height="50px">Enter Email</td>
							<td width="200px" height="50px"><textarea name="email" placeholder="Enter Email"></textarea> </td>
							<td width="200px" height="50px">Enter phone Number</td>
							<td width="200px" height="50px"><textarea name="pno" placeholder="Enter Ph.No"></textarea> </td>
						</tr>
						<tr>
							<td> <input type="submit" name="sub" value="save" align="center"></td>
						</tr>
					</table>

				</form>	
				<?php
				if(isset($_POST['sub']))
				{
					$name=$_POST['name'];
					$rname=$_POST['rname'];
					$address=$_POST['address'];
					$city=$_POST['city'];
					$age=$_POST['age'];
					$bgroup=$_POST['bgroup'];
					$email=$_POST['email'];
					$pno=$_POST['pno'];
					$q=$db->prepare("INSERT INTO donor_registration(name,rname,address,city,age,bgroup,email,pno)values(:name,:rname,:address,:city,:age,:bgroup,:email,:pno)");
					$q->bindvalue('name',$name);
					$q->bindvalue('rname',$rname);
					$q->bindvalue('address',$address);
					$q->bindvalue('city',$city);
					$q->bindvalue('age',$age);
					$q->bindvalue('bgroup',$bgroup);
					$q->bindvalue('email',$email);
					$q->bindvalue('pno',$pno);
					if($q->execute()){
						echo "<script> alert(Donor registration done)</script>";
					}else{
						echo"<script>alert(Donor registration fail)</script>";
					}
				}else{
					echo "not clicked";
				}
				?>
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
