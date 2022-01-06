<?php 
include("config.php");

if(isset($_POST['admin_id']))
{
$admin_id = $_POST['admin_id'];
$password = $_POST['password'];

$res = mysqli_query($conn,"select * from admins where admin_id='$admin_id' and password='$password'");
$result=mysqli_fetch_array($res);

if($result)
{
echo "You have logged in as an admin";
header("location:adminpage.php");   // create my-account.php page for redirection 
exit;	
}
else
{
	echo "failed ";
}
}
require_once "config.php";
?>

<!doctype html>
<html lang="en">
  <head>
  <?php include('templates/header.php'); ?>
    <style>
body {
  background-image: url("https://t3.ftcdn.net/jpg/02/00/12/40/360_F_200124079_6ayr4VU5AhLMfwPaDOxIk6Dgv0JWaCwX.jpg");
  /* background-repeat: no-repeat;
  background-size: cover; */
}
.space{
  padding:20px;
}
.container{
  padding: 40px 50px !important;
  background-color:white;
  opacity: 0.85;
  max-width: 600px !important;
}

form{
  width:500px;
}
</style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>
<div class="space"></div>
<div class="container">
<h3>Admin Login:</h3>
<hr>

<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputadmin_id">Admin_id </label>
    <input type="text" name="admin_id" class="form-control" id="exampleInputadmin_id" aria-describedby="emailHelp" placeholder="Admin_id">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  
    <a href="#">Forgot password?</a>
    <br><br>

  <button type="submit" class="btn btn-primary">Continue</button>
 
</form>



</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>