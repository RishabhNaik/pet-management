<?php

require_once "config.php";

session_start();


if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<?php 

$result = mysqli_query($conn,"SELECT ROW_NUMBER() OVER () row_num,count(id),id,petname,photo,specie,price FROM cart group by petname order by row_num");
?>
<?php include('templates/header1.php'); ?>
<?php include('templates/csstags.php'); ?>
  <div class="container mt-4">
    <div class="row">
    <?php while($row=mysqli_fetch_array($result)){ ?>
        <div class="col-auto mb-3"  style="width: 380px;">
            <div class="card">
                <form action="" method="post">
                <div class="card-body">
                    <p class="card-text"><?php echo $row['row_num']; ?></p>
                    <h5 class="card-title"> <b><?php echo $row['petname']; ?></b></h5>
                    <img class="img_size" style="height:220px;" src="<?php echo $row['photo']; ?>" alt="pet image" width="308px">
                    <p></p>
                    <h6 class="card-subtitle mb-2 "><b>Specie:&nbsp;</b> <?php echo $row['specie']; ?></h6>
                    <p class="card-text"><b>No of Quantity:&nbsp;</b> <?php echo $row['count(id)']; ?></p>
                    <h6 class="card-subtitle mb-2 "><b> ₹ <?php echo $row['price']; ?></b></h6>
                    <p></p>
                    <a href="delete_cart.php?id=<?php echo $row["id"]; ?>" >Delete</a>
                </div>
                </form>
            </div>
        </div>
        <?php } ?>
    </div>
  </div>
<?php include('templates/footer.php'); ?>
<?php include('templates/scriptags.php'); ?>