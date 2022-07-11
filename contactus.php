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
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Explore</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container mt-3">
  <h2>Stacked form</h2>
  <div class="ml-7">
    <div class="col-md-7">
  <form action="">
        <div class="mb-3">
      <input type="text" class="form-control" placeholder="Enter your name" name="">
    </div>
    <div class="mb-3 mt-3">
      <input type="email" class="form-control" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <input type="" class="form-control" placeholder="Enter phone number(optional)" name="">
    </div>
        <div class="mb-3">
          <textarea rows="3" cols="7" class="form-control" placeholder="Enter message"></textarea>
    </div>
    <button type="submit" class="form-control btn btn-success">Submit</button>
  </form>
</div>
</div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>

</body>
</html>
