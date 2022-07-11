<?php
session_start();
header("location:login.php");
include 'conn.php';
$email=$_POST['email'];
$password=$_POST['pass'];
$q="select * from mytab where email='$email'&& password='$password'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	$_SESSION['email']=$email;
	header("location:home.php");
} else {
	header("location:login.php");
}
?>