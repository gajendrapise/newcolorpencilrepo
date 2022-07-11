<?php
include 'conn1.php';
if (isset($_POST['done'])) {
$name=$_POST['name'];
$class=$_POST['class'];
$q="INSERT INTO `student`( `Name`, `Class`) VALUES ($name','$class')";
$query=mysqli_query($con,$q);

}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form method="post">
    <label>Name</label>
  <input type="text" name="name"> <br>
   <label>Class</label>
  <input type="text" name="class"><br>
 <button type="button" class="btn btn-success" data-dismiss="modal" name="done">Save</button>

</form>
</body>
</html>