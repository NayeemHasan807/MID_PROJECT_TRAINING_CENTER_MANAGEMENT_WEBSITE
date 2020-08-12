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
	<title>Notice Section</title>
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
				<td colspan="10" width="30%">
					<ul>
						<li><a href='TrainerHome.php'><font color='red'>Home</font></a></li>
						<li><a href="ViewProfile.php"><font color="red">View Profile</font></a></li>
						<li><a href="EditProfile.php"><font color="red">Edit Profile</font></a></li>
						<li><a href="ChangePassword.php"><font color="red">Change Password</font></a></li>
						<li><a href="File.php"><font color="red">Files</font></a></li>
						<li><a href="Notice.php"><font color="red">Notices</font></a></li>
						<li><a href="StudentMarks.php"><font color="red">Student Marks</font></a></li>
						<li><a href="SendMail.php"><font color="red">Send Mail</font></a></li>
						<li><a href="Assignments.php"><font color="red">Assignments</font></a></li>
						<li><a href="ClassTimes.php"><font color="red">Class Times</font></a></li>
						<li><a href="Attendence.php"><font color="red">Attendence</font></a></li>
						<li><a href="Logout.php"><font color="red">Logout</font></a></li>


					</ul>
				</td>
				<td>
					<table width="100%">
						<tr>
							<td width="30%">Serial</td>
							<td colspan="2" width="70%"><b>Notice</b></td>
						</tr>
						<tr><td colspan="3"><hr/></td></tr>
						<tr>
							<td width="30%">1.</td>
							<td width="50%">Next Weekend Extra Class!</td>
							<td width="20%">
								<button type="button">
									Delete
								</button>
							</td>
						</tr>
						<tr><td colspan="3"><hr/></td></tr>
						<tr>
							<td width="30%">2.</td>
							<td width="50%">Next monday all classes are cancelled!</td>
							<td width="20%">
								<button type="button">
									Delete
								</button>
							</td>
						</tr>
						<tr><td colspan="3"><hr/></td></tr>
						<tr>
							<td width="30%">3.</td>
							<td width="50%">Final exam routine!</td>
							<td width="20%">
								<button type="button">
									Delete
								</button>
							</td>
						</tr>
						<tr><td colspan="3"><hr/></td></tr>
						<tr>
							<td colspan="3">
								<form method="POST">
									Notice Subject:<br/>
									<input type="text" name="text"><br/>
									Details:<br/>
									<textarea rows="5" cols="80"></textarea><br/>
									<input type="submit" name="Add"><input type="reset" name="reset">

								</form>
							</td>
						</tr>
						<tr><td colspan="3"><hr/></td></tr>
					</table>
				</td>
			</tr>
		</table>
	</fieldset>
</body>
</html>