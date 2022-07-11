<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
			<th>ID</th>
			<th>Image</th>
			<th>Name</th>
			<th>Class</th>
			<th>Username</th>
			<th>Password</th>
			<th>Edit</th>
			<th>Delete</th>

		</tr>
    </thead>
<?php
	include 'conn1.php';
	$q="SELECT * FROM student";
	$query=mysqli_query($con,$q);
	while ($res=mysqli_fetch_array($query)) {
		
	?>
    <tbody>
     <tr>
		<td><?php echo $res['StudentID']; ?></td>
		<td><img src="images/<?php echo $res['Image']; ?>" alt="student"></td>
		<td><?php echo $res['Name']; ?></td>
		<td><?php echo $res['Class']; ?></td>
		<td><?php echo $res['StudentID']; ?></td>
		<td><?php echo $res['StudentID']; ?></td>
		<td><button class='btn btn-primary'><a style="color: white;" href="update.php?StudentID=<?php echo $res['StudentID']; ?>">Edit</a></button></td>
		<td><button class='btn btn-danger'><a style="color: white;" href="delete.php?StudentID=<?php echo $res['StudentID']; ?>">Delete</a></button></td>


	</tr>
    </tbody>
<?php
}
	?>
  </table>
</div>
</body>
</html>
