<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
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
  <?php
session_start();
if (!isset($_SESSION['email'])) {
  header("location:login.php");
}
?>
<h3>Welcome <?php echo $_SESSION['email']; ?></h3>
</div>
</div>
</div>
<div class="container-fluid mt-5 p-4 bg-info text-center">
  <p>&copy 2020 AVES All rights reserved.</p>
</div>

</body>
</html>
