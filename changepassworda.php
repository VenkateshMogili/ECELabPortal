<?php
session_start();
error_reporting(0);
require_once 'connect.php';
if(isset($_SESSION['stuid']))
{
	$stuid=$_SESSION['stuid'];
	$old=mysql_real_escape_string(strip_tags($_POST['old']));
	$olde=mysql_real_escape_string(strip_tags(md5($_POST['old'])));
	$new=mysql_real_escape_string(strip_tags($_POST['new']));
	$newe=mysql_real_escape_string(strip_tags(md5($_POST['new'])));
$sql=mysqli_query($con,"SELECT * FROM students where stuid='$stuid' and password='$old'");
if(mysqli_fetch_array($sql)==true)
{
	$k=mysqli_query($con,"UPDATE students SET password='$new',encrypted='$newe' where stuid='$stuid' and encrypted='$olde'");
	if($k==true)
	{
	echo "<script>alert('Your Password has been changed successfully...');window.location='index.php';</script>";
	}
	else{
		echo "<script>alert('Invalid Credentials');window.location='index.php';</script>";
	}
}
else{
		echo "<script>alert('Invalid Credentials');window.location='index.php';</script>";
	}
}
else{
	echo "<script>alert('Please Login');window.location='index.php';</script>";
}