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
	<title>Change Password</title>
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
									echo "<li><a href='ViewProfile.php'><font color='red'>View Profile</font></a></li>";
									echo "<li><a href='EditProfile.php'><font color='red'>Edit Profile</font></a></li>";
									echo "<li><a href='ChangePassword.php'><font color='red'>Change Password</font></a></li>";
									echo "<li><a href='File.php'><font color='red'>Files</font></a></li>";
									echo "<li><a href='Notice.php'><font color='red'>Notices</font></a></li>";
									echo "<li><a href='StudentMarks.php'><font color='red'>Student Marks</font></a></li>";
									echo "<li><a href='SendMail.php'><font color='red'>Send Mail</font></a></li>";
									echo "<li><a href='Assignments.php'><font color='red'>Assignments</font></a></li>";
									echo "<li><a href='ClassTimes.php'><font color='red'>Class Times</font></a></li>";
									echo "<li><a href='Attendence.php'><font color='red'>Attendence</font></a></li>";
									echo "<li><a href='Logout.php'><font color='red'>Logout</font></a></li>";

								}
								elseif($_SESSION['UserType']=="Student")
								{
									echo "<li><a href='StudentHome.php'><font color='red'>Home</font></a></li>";
									echo "<li><a href='ViewProfile.php'><font color='red'>View Profile</font></a></li>";
									echo "<li><a href='EditProfile.php'><font color='red'>Edit Profile</font></a></li>";
									echo "<li><a href='ChangePassword.php'><font color='red'>Change Password</font></a></li>";
									echo "<li><a href='Logout.php'><font color='red'>Logout</font></a></li>";
								}
								else
								{
									echo "<li><a href='AdminHome.php'><font color='red'>Home</font></a></li>";
									echo "<li><a href='ViewProfile.php'><font color='red'>View Profile</font></a></li>";
									echo "<li><a href='EditProfile.php'><font color='red'>Edit Profile</font></a></li>";
									echo "<li><a href='ChangePassword.php'><font color='red'>Change Password</font></a></li>";
									echo "<li><a href='Logout.php'><font color='red'>Logout</font></a></li>";
								}
							}
							else
							{
								if($_COOKIE['UserType']=="Trainer")
								{
									echo "<li><a href='TrainerHome.php'><font color='red'>Home</font></a></li>";
									echo "<li><a href='ViewProfile.php'><font color='red'>View Profile</font></a></li>";
									echo "<li><a href='EditProfile.php'><font color='red'>Edit Profile</font></a></li>";
									echo "<li><a href='ChangePassword.php'><font color='red'>Change Password</font></a></li>";
									echo "<li><a href='File.php'><font color='red'>Files</font></a></li>";
									echo "<li><a href='Notice.php'><font color='red'>Notices</font></a></li>";
									echo "<li><a href='StudentMarks.php'><font color='red'>Student Marks</font></a></li>";
									echo "<li><a href='SendMail.php'><font color='red'>Send Mail</font></a></li>";
									echo "<li><a href='Assignments.php'><font color='red'>Assignments</font></a></li>";
									echo "<li><a href='ClassTimes.php'><font color='red'>Class Times</font></a></li>";
									echo "<li><a href='Attendence.php'><font color='red'>Attendence</font></a></li>";
									echo "<li><a href='Logout.php'><font color='red'>Logout</font></a></li>";
								}
								elseif($_COOKIE['UserType']=="Student")
								{
									echo "<li><a href='StudentHome.php'><font color='red'>Home</font></a></li>";
									echo "<li><a href='ViewProfile.php'><font color='red'>View Profile</font></a></li>";
									echo "<li><a href='EditProfile.php'><font color='red'>Edit Profile</font></a></li>";
									echo "<li><a href='ChangePassword.php'><font color='red'>Change Password</font></a></li>";
									echo "<li><a href='Logout.php'><font color='red'>Logout</font></a></li>";
								}
								else
								{
									echo "<li><a href='AdminHome.php'><font color='red'>Home</font></a></li>";
									echo "<li><a href='ViewProfile.php'><font color='red'>View Profile</font></a></li>";
									echo "<li><a href='EditProfile.php'><font color='red'>Edit Profile</font></a></li>";
									echo "<li><a href='ChangePassword.php'><font color='red'>Change Password</font></a></li>";
									echo "<li><a href='Logout.php'><font color='red'>Logout</font></a></li>";
								}
							}
								
						?>
					</ul>
				</td>
				<td>
					<form method="POST">
						<table width="100%">
                            <tr>
                                <td width="20%"><font size="3">Current Password</font></td>
                                <td>:</td>
                                <td>
                                	<input type="password" name="Password">
                                </td>
                            </tr>
                            <tr><td colspan="3"><hr/></td></tr>
                            <tr>
                                <td><font size="3" color="green">New Password</font></td>
                                <td>:</td>
                                <td>
                                	<input type="password" name="NewPassword">
                                </td>
                            </tr>
                            <tr><td colspan="3"><hr/></td></tr>
                            <tr>
                                <td><font size="3" color="red" >Retype New Password</font></td>
                                <td>:</td>
                                <td>
                                	<input type="password" name="ReNewPassword">
                                </td>
                            </tr>
                            <tr><td colspan="3"><hr/></td></tr>
                            <tr>
								<td colspan="3" align="left" >
									<input type="Submit" name="Change" value="Change">
									<input type="Reset" name="Clear" value="Clear">
								</td>
							</tr>
                        </table>
					</form>
					<hr/>
				</td>
			</tr>
		</table>
	</fieldset>
</body>
</html>
<?php
	if(isset($_POST['Change']))
	{
		if($_POST['Password']!="" and $_POST['NewPassword']!="" and $_POST['ReNewPassword']!="")
		{
			$connection = mysqli_connect('127.0.0.1', 'root', '', 'training center management website');
			if(!empty($_SESSION))
			{
				if($_SESSION['Password']==$_POST['Password'])
				{
					if($_POST['NewPassword']==$_POST['ReNewPassword'])
					{
						$result = mysqli_query($connection, "update `registration` SET `Password`='".$_POST['NewPassword']."' WHERE UserId='".$_SESSION['UserId']."'");
						$_SESSION['Password']=$_POST['NewPassword'];
						echo "Password changed!";
					}
					else
						echo "New Password And Retype New Password Must Need To Be Same!";

				}
				else
					echo "Current Password is Wrong!";

			}
			else
			{
				if($_COOKIE['Password']==md5($_POST['Password']))
				{
					if($_POST['NewPassword']==$_POST['ReNewPassword'])
					{
						$result = mysqli_query($connection, "update `registration` SET `Password`='".$_POST['NewPassword']."' WHERE UserId='".$_COOKIE['UserId']."'");
						setcookie('Password',md5($_POST['NewPassword']),time()+10000,'/');
						echo "Password changed!";
					}
					else
						echo "New Password And Retype New Password Must Need To Be Same!";

				}
				else
					echo "Current Password is Wrong!";
			}
			mysqli_close($connection);			
			header('location:ChangePassword.php');
		}
		else
			echo "Fill All The Info First";
	}
?>