<?php
include 'conn1.php';
if (isset($_POST['done'])) {
  $studentid=$_GET['StudentID'];
$name=$_POST['name'];
$class=$_POST['class'];
$q="UPDATE `student` SET `StudentID`='$studentid',`Name`='$name',`Class`='$class' WHERE StudentID='$studentid'";
$query=mysqli_query($con,$q);
header("location:display1.php");

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
<form method="post">
    <label>Name</label>
  <input type="text" name="name" value="<?php echo $data['Name']; ?>"> 
   <label>Class</label>
  <input type="text" name="class" value="<?php echo $data['Class']; ?>
">
<button type="submit" name="done">submit</button>
</form>
</body>
</html>