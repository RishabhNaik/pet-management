<?php 
$results = mysqli_query($conn,"SELECT * FROM pet");
?>

  <div class="container mt-4">
    <div class="row">
    <?php while($row=mysqli_fetch_array($results)){ ?>
        <div class="col-auto mb-3"  style="width: 380px;">
            <div class="card">
                <form action="" method="post">
                <div class="card-body">
                    <h5 class="card-title"> <b><?php echo $row['petname']; ?></b></h5>
                    <img class="img_size" style="height:220px;" src="<?php echo $row['image']; ?>" alt="pet image" width="308px">
                    <p></p>
                    <h6 class="card-subtitle mb-2 text-muted"><b>Specie: <?php echo $row['specie']; ?></b></h6>
                    <h6 class="card-subtitle mb-2 "><b> ₹ <?php echo $row['cost']; ?></b></h6>
                    <p class="card-text"><?php echo $row['paragraph']; ?></p>
                </div>
                </form>
            </div>
        </div>
        <?php } ?>
    </div>
  </div>


