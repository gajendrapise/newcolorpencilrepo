<?php
include 'conn1.php';
if (isset($_POST['done'])) {
$filename=$_FILES['uploadfile']['name'];
$tempname=$_FILES['uploadfile']['tmp_name'];
$folder="images/".$filename;
$name=$_POST['name'];
$class=$_POST['class'];
$username=$_POST['user'];
$password=$_POST['pass'];

$q="INSERT INTO `student`( `Image`, `Name`, `Class`, `Username`, `Password`) VALUES ('$filename','$name','$class','$username','$password')";
if (move_uploaded_file($tempname,$folder)) {
    $msg= "file uploaded successfully";
  } else {
    $msg= "error in uploaded file";
  }
  echo "$msg";
$query=mysqli_query($con,$q);

}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
  <label>Image</label>
  <input type="file" name="uploadfile">
    <label>Name</label>
  <input type="text" name="name"> 
   <label>Class</label>
  <input type="text" name="class">
    <label>Username</label>
  <input type="text" name="user">
    <label>Password:</label>
<input type="text" name="pass">
<button type="submit" name="done">submit</button>
</form>
</body>
</html>