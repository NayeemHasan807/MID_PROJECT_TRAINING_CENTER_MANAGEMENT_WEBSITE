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
	<title>Student Marks</title>
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
							<td width="20%">Serial</td>
							<td width="20%"><b>Student Name</b></td>
							<td width="20%">C#</td>
							<td width="20%">Math</td>
							<td width="20%">WebTech</td>
						</tr>
						<tr><td colspan="5"><hr/></td></tr>
						<tr>
							<td width="20%">1</td>
							<td width="20%">Nayeem</td>
							<td width="20%">85</td>
							<td width="20%">70</td>
							<td width="20%">86</td>
						</tr>
						<tr><td colspan="5"><hr/></td></tr>
						<tr>
							<td width="20%">2</td>
							<td width="20%">Jerry</td>
							<td width="20%">50</td>
							<td width="20%">99</td>
							<td width="20%">65</td>
						</tr>
						<tr><td colspan="5"><hr/></td></tr>
						<tr>
							<td width="20%">3</td>
							<td width="20%">Tom</td>
							<td width="20%">100</td>
							<td width="20%">20</td>
							<td width="20%">80</td>
						</tr>
						<tr><td colspan="5"><hr/></td></tr>
						<tr>
							<td colspan="5">
								<button type="button">Add</button>
								<button type="button">Update</button>
								<button type="button">Delete</button>
							</td>
						</tr>
						<tr><td colspan="5"><hr/></td></tr>
					</table>
				</td>
			</tr>
		</table>
	</fieldset>
</body>
</html>