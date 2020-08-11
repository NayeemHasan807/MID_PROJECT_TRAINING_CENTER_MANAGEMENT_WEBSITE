<?php
	session_start();
	session_destroy();

	setcookie('Name',$_COOKIE['Name'],time()-10000,'/');
	setcookie('UserId',$_COOKIE['UserId'],time()-10000,'/');
	setcookie('Password',md5($_COOKIE['Password']),time()-10000,'/');
	setcookie('Gender',$_COOKIE['Gender'],time()-10000,'/');
	setcookie('DOB',$_COOKIE['DOB'],time()-10000,'/');
	setcookie('Email',$_COOKIE['Email'],time()-10000,'/');
	setcookie('PhoneNo',$_COOKIE['PhoneNo'],time()-10000,'/');
	setcookie('UserType',$_COOKIE['UserType'],time()-10000,'/');
	setcookie('status','set',time()-10000,'/');
	header('location:Home.html');
?>