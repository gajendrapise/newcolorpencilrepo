<!DOCTYPE html>
<html lang="en">
<head>
  <title>Colorpencil - Art Meets Learnings</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark​ bg-info text-white" style="text-align: right;">
  <div class="container-fluid" ​class="bg-info text-white">

      <h2>Welcome Colorpencil</h2>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" style="color: black;" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-3">
  <div class="row">
  <div class="col-md-4">
    <button type="submit" class="btn btn-success"><a style="color: white;" href="display1.php">Students</a></button>
  </div>
  <div class="col-md-8">
    <?php include "display2.php" ?>
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
</div>
</div>
<div class="container-fluid mt-5 p-4 text-white text-center">
  <p>Footer</p>
</div>

</body>
</html>
