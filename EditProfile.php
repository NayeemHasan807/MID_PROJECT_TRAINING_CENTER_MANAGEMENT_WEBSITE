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
	<title>Edit Profile</title>
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
								<td width="15%">Name</td>
								<td>:</td>
								<td>
									<input type="text" name="Name">
								</td>
							</tr>
							<tr><td colspan="3"><hr/></td></tr>			
							<tr>
								<td>Gender</td>
								<td>:</td>
								<td>
									<input type="radio" name="Gender" value="Male">Male
									<input type="radio" name="Gender" value="Female">Female
									<input type="radio" name="Gender" value="Other">Other
								</td>
							</tr>			
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Date of Birth</td>
								<td>:</td>
								<td>
									<input type="text" name="DOB"> <i>dd/mm/yyyy</i>
								</td>
							</tr>
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td>
									<input type="email" name="Email">
								</td>
							</tr>
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td>Phone No</td>
								<td>:</td>
								<td>
									<input type="text" name="PhoneNo">
								</td>
							</tr>
							<tr><td colspan="3"><hr/></td></tr>
							<tr>
								<td colspan="3" align="left" >
									<input type="Submit" name="Save" value="Save">
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
	if(isset($_POST['Save']))
	{
		if(empty($_POST['Name']) || empty($_POST['Gender']) || empty($_POST['DOB']) || empty($_POST['Email']) || empty($_POST['PhoneNo']))
		{
			echo "Null Submission!!!";
		}
		else
		{
			$connection = mysqli_connect('127.0.0.1', 'root', '', 'training center management website');
			if(!empty($_SESSION))
			{
				$result = mysqli_query($connection, "update `registration` SET `Name`='".$_POST['Name']."',`Gender`='".$_POST['Gender']."',`DOB`='".$_POST['DOB']."',`Email`='".$_POST['Email']."',`PhoneNo`='".$_POST['PhoneNo']."' WHERE UserId='".$_SESSION['UserId']."'");
				$_SESSION['Name']= $_POST['Name'];
				$_SESSION['Gender']= $_POST['Gender'];
				$_SESSION['DOB'] = $_POST['DOB'];
				$_SESSION['Email'] = $_POST['Email'];
				$_SESSION['PhoneNo'] = $_POST['PhoneNo'];
			}
			else
			{
				$result = mysqli_query($connection, "update `registration` SET `Name`='".$_POST['Name']."',`Gender`='".$_POST['Gender']."',`DOB`='".$_POST['DOB']."',`Email`='".$_POST['Email']."',`PhoneNo`='".$_POST['PhoneNo']."' WHERE UserId='".$_COOKIE['UserId']."'");
				setcookie('Name',$_POST['Name'],time()+10000,'/');
				setcookie('Gender',$_POST['Gender'],time()+10000,'/');
				setcookie('DOB',$_POST['DOB'],time()+10000,'/');
				setcookie('Email',$_POST['Email'],time()+10000,'/');
				setcookie('PhoneNo',$_POST['PhoneNo'],time()+10000,'/');
			}
			mysqli_close($connection);			
			header('location:EditProfile.php');
		}
	}
?>