<?php
	session_start();

	if(isset($_POST['Login']))
	{
		if(empty($_POST['UserId']) || empty($_POST['Password']))
		{
			echo "Null Submission!!!";

		}
		else
		{
			
			$connection = mysqli_connect('127.0.0.1', 'root', '', 'training center management website');
			$result= mysqli_query($connection, "select * from registration where UserId='".$_POST['UserId']."' and Password = '".$_POST['Password']."';");
			$data=mysqli_fetch_assoc($result);
			mysqli_close($connection);
			if(!empty($data))
			{
				if(isset($_POST['RememberMe']))
				{
					setcookie('Name',$data['Name'],time()+10000,'/');
					setcookie('UserId',$data['UserId'],time()+10000,'/');
					setcookie('Password',md5($data['Password']),time()+10000,'/');
					setcookie('Gender',$data['Gender'],time()+10000,'/');
					setcookie('DOB',$data['DOB'],time()+10000,'/');
					setcookie('Email',$data['Email'],time()+10000,'/');
					setcookie('PhoneNo',$data['PhoneNo'],time()+10000,'/');
					setcookie('UserType',$data['UserType'],time()+10000,'/');
					setcookie('status','set',time()+10000,'/');
					//print_r($_COOKIE);
					if ($_COOKIE['UserType']=="Admin") 
					{
						header('location:AdminHome.php');
					}
					elseif ($_COOKIE['UserType']=="Student") 
					{
						header('location:StudentHome.php');
					}
					else
						header('location:TrainerHome.php');
				}
				else
				{
					$_SESSION['Name']= $data['Name'];
					$_SESSION['UserId']= $data['UserId'];
					$_SESSION['Password']= $data['Password'];
					$_SESSION['Gender']= $data['Gender'];
					$_SESSION['DOB'] = $data['DOB'];
					$_SESSION['Email'] = $data['Email'];
					$_SESSION['PhoneNo'] = $data['PhoneNo'];
					$_SESSION['UserType'] = $data['UserType'];
					$_SESSION['status']  = "set";
					//print_r($_SESSION);
					if ($_SESSION['UserType']=="Admin") 
					{
						header('location:AdminHome.php');
					}
					elseif ($_SESSION['UserType']=="Student") 
					{
						header('location:StudentHome.php');
					}
					else
						header('location:TrainerHome.php');
				}
			}
			else
				echo "Invalic UserId Or Password!!!";
		}
	}
	else
	{
		header("location:Login.html");
	}


?>