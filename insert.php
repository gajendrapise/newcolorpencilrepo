<?php
include "conn.php";
if(isset($_POST['done'])){
  $email=$_POST['email'];
  $password=$_POST['pass'];
  $q="INSERT INTO dtab ('email','password') VALUES('$email','$password')";
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
  <label>email:</label>
  <input type="email" name="email">
    <label>password:</label>
<input type="password" name="pass">
<button type="submit" name="done">submit</button>
</form>
</body>
</html>