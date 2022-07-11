<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mission</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Our Works</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Imagiobox</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
    <main role="main">

     <div id="carouselExampleIndicators" class=" carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/slider1.png" alt="First slide" width="25%" height="450px">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="text-white">AVES</h1>
              </div> 
              <div class="carousel-caption d-none d-md-block">
                  <button  class="btn btn-danger">imagiobox</button>
                  <button class="btn btn-primary">ColorPencil</button>
              </div>  
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/slider2.jpg" alt="First slide" width="25" height="450px">
                <div class="carousel-caption d-none d-md-block" >
                  <button  class="btn btn-danger">imagiobox</button>
                  <button class="btn btn-primary">ColorPencil</button>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/slider3.jpg" alt="First slide" width="25%" height="450px">
                  <div class="carousel-caption d-none d-md-block">
                  <button  class="btn btn-danger"><a href="imagiobox.php">imagiobox</a></button>
                  <button class="btn btn-primary"><a href="home.php">ColorPencil</a></button>               </div>
            </div>  
        </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
      </div>
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container">
        <h1 style="text-align: center;">MISSION</h1>
        <p>AVES, is a group of young enthusiasts with the core mission of making art and creative education an integral part of our schooling system. We believe this would help in enhancing and promoting a culture of creative learning in our society, thereby equipping our future generations with the advanced skills necessary for the 21st century.<br>

We work in collaborations with already established schools and other organizations on a local scale with the desire of creating an appreciation of art among the next generation of citizens while at the same time providing a platform for the current young generation of upcoming artist to practice their art and to be a part of our basic mission of inculcating a healthy art culture for the future.</p>
      </div>

      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
