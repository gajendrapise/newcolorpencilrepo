<?php
include 'conn1.php';
if (isset($_POST['done'])) {
  $studentid=$_GET['StudentID'];
$filename=$_FILES['uploadfile']['name'];
$tempname=$_FILES['uploadfile']['tmp_name'];
$folder="images/".$filename;
$name=$_POST['name'];
$class=$_POST['class'];
$username=$_POST['user'];
$password=$_POST['pass'];

$q="UPDATE `student` SET `StudentID`='$studentid',`Image`='$filename',`Name`='$name',`Class`='$class',`Username`='$username',`Password`='$password' WHERE StudentID='$studentid'";
if (move_uploaded_file($tempname,$folder)) {
    $msg= "file uploaded successfully";
  } else {
    $msg= "error in uploaded file";
  }
  echo "$msg";
$query=mysqli_query($con,$q);
header("location:display.php");

}

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
  include 'conn1.php';
  $q="SELECT * FROM student";
  $query=mysqli_query($con,$q);
  $data=mysqli_fetch_array($query);
  ?>
<form method="post" enctype="multipart/form-data">
  <label>Image</label>
  <input type="file" name="uploadfile" value="images/<?php echo $data['Image']; ?>">
    <label>Name</label>
  <input type="text" name="name" value="<?php echo $data['Name']; ?>"> 
   <label>Class</label>
  <input type="text" name="class" value="<?php echo $data['Class']; ?>
">
    <label>Username</label>
  <input type="text" name="user" value="<?php echo $data['Username']; ?>
">
    <label>Password:</label>
<input type="text" name="pass" value="<?php echo $data['Password']; ?>">
<button type="submit" name="done">submit</button>
</form>
</body>
</html>