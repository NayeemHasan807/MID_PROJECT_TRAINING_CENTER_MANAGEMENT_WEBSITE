<?php
	session_start();
	if(!empty($_SESSION))
	{
		if(empty($_SESSION['status']))
		{
			header('location:Logout.php');
		}
	}
	else
	{
		if(empty($_COOKIE['status']))
		{
			header('location:Logout.php');
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
</head>
<body>
	<fieldset>
		<p><h1><font color='green'>NSS Training Center</font></h1></p>
		<?php
			if(!empty($_SESSION))
			{
				echo "<p align='right'><font color='black'>Logged in as </font><a href='ViewProfile.php'><font color='red'>".$_SESSION['Name']."</font></a> | <a href='Logout.php'><font color='red'>Logout</font></a></p>";
			}
			else
				echo "<p align='right'><font color='black'>Logged in as </font><a href='ViewProfile.php'><font color='red'>".$_COOKIE['Name']."</font></a> | <a href='Logout.php'><font color='red'>Logout</font></a></p>";
		?>
	</fieldset>
	<fieldset>
		<table cellspacing="0" cellpadding="5" border="1" width="100%">
			<tr>
				<td colspan="10">
					<ul>
						<?php
							if(!empty($_SESSION))
							{
								if($_SESSION['UserType']=="Trainer")
								{
									echo "<li><a href='TrainerHome.php'><font color='red'>Home</font></a></li>";
								}
								elseif($_SESSION['UserType']=="Student")
								{
									echo "<li><a href='StudentHome.php'><font color='red'>Home</font></a></li>";
								}
								else
								{
									echo "<li><a href='AdminHome.php'><font color='red'>Home</font></a></li>";
								}
							}
							else
							{
								if($_COOKIE['UserType']=="Trainer")
								{
									echo "<li><a href='TrainerHome.php'><font color='red'>Home</font></a></li>";
								}
								elseif($_COOKIE['UserType']=="Student")
								{
									echo "<li><a href='StudentHome.php'><font color='red'>Home</font></a></li>";
								}
								else
								{
									echo "<li><a href='AdminHome.php'><font color='red'>Home</font></a></li>";
								}
							}
								
						?>
						<li><a href="ViewProfile.php"><font color="red">View Profile</font></a></li>
						<li><a href="EditProfile"><font color="red">Edit Profile</font></a></li>
						<li><a href="ChangePassword.php"><font color="red">Change Password</font></a></li>
						<li><a href="Logout.php"><font color="red">Logout</font></a></li>
					</ul>
				</td>
				<td>
					<table width="100%">
						<tr>
							<td width="15%">Name</td>
							<td>:</td>
							<td>
								<?php
									if(!empty($_SESSION))
									{
										echo $_SESSION['Name'];
									}
									else
										echo $_COOKIE['Name'];
								?>
							</td>
						</tr>
						<tr><td colspan="3"><hr/></td></tr>			
						<tr>
							<td>Gender</td>
							<td>:</td>
							<td>
								<?php
									if(!empty($_SESSION))
									{
										echo $_SESSION['Gender'];
									}
									else
										echo $_COOKIE['Gender'];
								?>
							</td>
						</tr>			
						<tr><td colspan="3"><hr/></td></tr>
						<tr>
							<td>Date of Birth</td>
							<td>:</td>
							<td>
								<?php
									if(!empty($_SESSION))
									{
										echo $_SESSION['DOB'];
									}
									else
										echo $_COOKIE['DOB'];
								?>
							</td>
						</tr>
						<tr><td colspan="3"><hr/></td></tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td>
								<?php
									if(!empty($_SESSION))
									{
										echo $_SESSION['Email'];
									}
									else
										echo $_COOKIE['Email'];
								?>
							</td>
						</tr>
						<tr><td colspan="3"><hr/></td></tr>
						<tr>
							<td>Phone No</td>
							<td>:</td>
							<td>
								<?php
									if(!empty($_SESSION))
									{
										echo $_SESSION['PhoneNo'];
									}
									else
										echo $_COOKIE['PhoneNo'];
								?>
							</td>
						</tr>
						<tr><td colspan="3"><hr/></td></tr>
						<tr>
							<td>User Type</td>
							<td>:</td>
							<td>
								<?php
									if(!empty($_SESSION))
									{
										echo $_SESSION['UserType'];
									}
									else
										echo $_COOKIE['UserType'];
								?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</fieldset>
</body>
</html>