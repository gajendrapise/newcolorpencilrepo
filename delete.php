<?php
include 'conn1.php';
$studentid = $_GET['StudentID'];
$q="DELETE FROM student WHERE StudentID= '$studentid'";
mysqli_query($con,$q);
header("location:display.php");
?>