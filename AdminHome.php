<?php
	session_start();
	if(!empty($_SESSION))
	{
		if(empty($_SESSION['status']) or $_SESSION['UserType']!="Admin")
		{
			header('location:Logout.php');
		}
	}
	else
	{
		if(empty($_COOKIE['status']) or $_COOKIE['UserType']!="Admin")
		{
			header('location:Logout.php');
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
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
						<li><a href='AdminHome.php'><font color='red'>Home</font></a></li>
						<li><a href="ViewProfile.php"><font color="red">View Profile</font></a></li>
						<li><a href="EditProfile.php"><font color="red">Edit Profile</font></a></li>
						<li><a href="ChangePassword.php"><font color="red">Change Password</font></a></li>
						<li><a href="Logout.php"><font color="red">Logout</font></a></li>
					</ul>
				</td>
				<td>
					<?php
						if(!empty($_SESSION))
						{
							echo "<h1 align='center'><font color='black'>Welcome ".$_SESSION['Name']."</font></h1>";
						}
						else
							echo "<h1 align='center'><font color='black'>Welcome ".$_COOKIE['Name']."</font></h1>";
					?>	
					<p align="center"><font size="3" color='black'>To NSS Training Center Admin Home</font></p>
				</td>
			</tr>
		</table>
	</fieldset>
</body>
</html>