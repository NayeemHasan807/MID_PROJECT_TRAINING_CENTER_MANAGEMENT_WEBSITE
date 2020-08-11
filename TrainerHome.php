<?php
	session_start();
	if(!empty($_SESSION))
	{
		if(empty($_SESSION['status']) or $_SESSION['UserType']!="Trainer")
		{
			header('location:Logout.php');
		}
	}
	else
	{
		if(empty($_COOKIE['status']) or $_COOKIE['UserType']!="Trainer")
		{
			header('location:Logout.php');
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Trainer Home</title>
</head>
<body>
	<fieldset>
		<p><h1><font color='green'>NSS Training Center</font></h1></p>
		<?php
			if(!empty($_SESSION))
			{
				echo "<p align='right'><font color='black'>Logged in as </font><a href='Profile.php'><font color='red'>".$_SESSION['Name']."</font></a> | <a href='Logout.php'><font color='red'>Logout</font></a></p>";
			}
			else
				echo "<p align='right'><font color='black'>Logged in as </font><a href='Profile.php'><font color='red'>".$_COOKIE['Name']."</font></a> | <a href='Logout.php'><font color='red'>Logout</font></a></p>";
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
					<?php
						if(!empty($_SESSION))
						{
							echo "<h1 align='center'><font color='black'>Welcome ".$_SESSION['Name']."</font></h1>";
						}
						else
							echo "<h1 align='center'><font color='black'>Welcome ".$_COOKIE['Name']."</font></h1>";
					?>	
					<p align="center"><font size="3" color='black'>To NSS Training Center Trainer Home</font></p>
				</td>
			</tr>
		</table>
	</fieldset>
</body>
</html>