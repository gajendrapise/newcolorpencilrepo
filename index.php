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
        <a class="nav-link" href="logins.php">Login</a>
      </li>
    </ul>
  </div>
</nav>


<img src="images/cp.jpg" alt="cp" width="100%">
<div class="container" style="text-align: center";>
  <h3>WHAT WE OFFER?</h3>
    <div class="row">
      <div class="col-sm-4">
        <img src="images/familyp.png" alt="familyp">
        <h2>For Artists</h2>
        <p>An Artist account to share your creative portfolio and to manage student accounts. A centralised platform with easy controls to document student development that ensures better interaction and feedback. Easily organise local and national level workshops and activities.</p>
      </div>
      <div class="col-sm-4">
        <img src="images/school.png" alt="school">
        <h2>For Parents</h2>
        <p>Offers parents a personalised window into their child’s development hence also creating a real audience for the student’s works. Easy to collect and organise their children’s works through their school years. Improving the parent teacher relations through feedback and interaction.</p>
      </div> 
      <div class="col-sm-4">
        <img src="images/student.png" alt="student">
        <h2>For Students</h2>
        <p>A safe and moderated space for them to connect with their friends and peers. A platform to document and share their art works. Easy access to resources and art facilities in a moderated environment. An opportunity for them to be part of community based art projects and learning through co-operation.</p>
      </div>       
    </div>
</div>
<div class="container-fluid" style="text-align: center";>
  <h2>Art Works</h2>
  <p>Find out the Best in our dreams...Dreams always come true.</p>
  <div class="row">
    <div class="col-sm-3">
      <img src="images/1.jpg" alt="myimg" width="100%">
    </div>
        <div class="col-sm-3">
       <img src="images/2.jpg" alt="myimg" width="100%">     
    </div>
        <div class="col-sm-3">
            <img src="images/3.jpg" alt="myimg" width="100%">
    </div>
            <div class="col-sm-3">
            <img src="images/4.jpg" alt="myimg" width="100%">
    </div>
  </div>
</div>
<div class="container-fluid" style="text-align: center";>
  <div class="row">
    <div class="col-sm-3">
      <img src="images/5.jpg" alt="myimg" width="100%">
    </div>
        <div class="col-sm-3">
       <img src="images/1.png" alt="myimg" width="100%">     
    </div>
        <div class="col-sm-3">
            <img src="images/7.jpg" alt="myimg" width="100%">
    </div>
            <div class="col-sm-3">
            <img src="images/8.jpg" alt="myimg" width="100%">
    </div>
  </div>
</div>
<div class="container-fluid" style="text-align: center";>
  <div class="row">
    <div class="col-sm-3">
      <img src="images/9.jpg" alt="myimg" width="100%">
    </div>
        <div class="col-sm-3">
       <img src="images/10.jpg" alt="myimg" width="100%">     
    </div>
        <div class="col-sm-3">
            <img src="images/11.jpg" alt="myimg" width="100%">
    </div>
            <div class="col-sm-3">
            <img src="images/12.jpg" alt="myimg" width="100%">
    </div>
  </div>
</div>
<div class="mt-5 p-4 bg-dark text-white text-center" style="text-align: left;">
  <?php include 'footer.php'; ?>
</div>

</body>
</html>
