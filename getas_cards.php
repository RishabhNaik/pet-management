<?php 
include ("templates/header.php");
include ("templates/csstags.php");
include ("templates/scriptags.php");

include ("config.php");

$results = mysqli_query($conn, "SELECT * FROM pet");
?>




  <div class="container mt-4">
    <div class="row">
    <?php while($row=mysqli_fetch_array($results)){ ?>
        <div class="col-auto mb-3">
            <div class="card" style="width: 340px;">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $row['petname']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"> <?php echo $row['category']; ?></h6>
                    <img class="img_size" style=width:300px; src="<?php echo $row['image']; ?>" alt="Card image top">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
  </div>


