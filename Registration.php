<?php
	session_start();

	if(isset($_POST['Register']))
	{
		if(empty($_POST['Name']) || empty($_POST['UserId']) || empty($_POST['Password']) || empty($_POST['CPassword']) || empty($_POST['Gender']) || empty($_POST['DOB']) || empty($_POST['Email']) || empty($_POST['PhoneNo']) || empty($_POST['UserType']) )
		{
			echo "Null Submission!!!";
		}
		else 
		{
			$connection = mysqli_connect('127.0.0.1', 'root', '', 'training center management website');
			$result= mysqli_query($connection, "select * from registration where UserId='".$_POST['UserId']."';");
			$data=mysqli_fetch_assoc($result);
			mysqli_close($connection);
			if(empty($data['UserId']))
			{
				if($_POST['Password'] == $_POST['CPassword'])
				{
					$connection = mysqli_connect('127.0.0.1', 'root', '', 'training center management website');
					$result = mysqli_query($connection, "insert into `registration`(`Name`, `UserId`, `Password`, `Gender`, `DOB`, `Email`, `PhoneNo`, `UserType`) values ('".$_POST['Name']."','".$_POST['UserId']."','".$_POST['Password']."','".$_POST['Gender']."','".$_POST['DOB']."','".$_POST['Email']."','".$_POST['PhoneNo']."','".$_POST['UserType']."');");
					mysqli_close($connection);
					header('location:Login.html');
				}
				else
				{
					echo "password & Confirm password must need to be same!!!";
				}				
			}
			else
			{
				echo "This User Id Already Exist!!! Please Try To Register With Another User Id!!!";
			}


		}

	}
	else
	{
		header("location:Registration.html");
	}

?>