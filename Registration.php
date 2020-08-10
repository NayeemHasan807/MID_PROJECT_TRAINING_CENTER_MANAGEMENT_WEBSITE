<?php
	session_start();

	if(isset($_POST['Register']))
	{
		if(empty($_POST['Name']) || empty($_POST['UserId']) || empty($_POST['Password']) || empty($_POST['RePassword']) || empty($_POST['Gender']) || empty($_POST['DOB']) || empty($_POST['Email']) || empty($_POST['PhoneNo']) || empty($_POST['UserType']) )
		{
			echo "null submission";
		}
		else 
		{
			if($_POST['Password'] == $_POST['RePassword'])
			{
				$connection = mysqli_connect('127.0.0.1', 'root', '', 'training center management website');
				$query= "insert into `registration`(`Name`, `UserId`, `Password`, `Gender`, `DOB`, `Email`, `PhoneNo`, `UserType`) values ('".$_POST['Name']."','".$_POST['UserId']."','".$_POST['Password']."','".$_POST['Gender']."','".$_POST['DOB']."','".$_POST['Email']."','".$_POST['PhoneNo']."','".$_POST['UserType']."');"
				$result = mysqli_query($connection, $query);

				header('location:Login.html');
			}
			else
			{
				echo "password & Confirm password must need to be same!";
			}
		}

	}
	else
	{
		header("location:Registration.html");
	}

?>