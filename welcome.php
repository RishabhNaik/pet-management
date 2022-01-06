<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!doctype html>
<html lang="en">
  <head>
  <?php include('templates/header1.php'); ?>
    
  </head>
  <body>

  <!-- <div class="container_welcome">
      <h3><?php echo "Welcome ". $_SESSION['username']?>!</h3>
  </div> -->


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/img1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<h1><td>hello</td></h1>

<div class="container">
  <div class="row">
    <div class="col">
       <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/doggo.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Dog</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
    </div>
	<div class="col">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/doggo.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Dog</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/doggo.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Dog</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/petsimg1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Cat</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/petsimg1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Cat</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/petsimg1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Cat</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
    </div>
  </div>
</div>

	<?php include('templates/footer.php'); ?>
	<?php include('templates/scriptags.php'); ?>

  </body>
</html>
