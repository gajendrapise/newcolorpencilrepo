<?php
session_start();
header("location:reg.php");
include 'conn.php';
$email=$_POST['email'];
$password=$_POST['pass'];
$username=$_POST['uname'];
$q="select * from mytab where username='$username', email='$email'&& password='$password'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	echo "duplicate data";
} else {
	$qy="INSERT INTO mytab(username, email, password) VALUES('$username', '$email','$password')";
	mysqli_query($con,$qy);
}
?>