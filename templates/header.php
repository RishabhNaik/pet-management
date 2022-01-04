<head>
	<title>GetPets</title>
  <?php include('csstags.php'); ?>
  
</head>
<body>
<nav id="navbar-example2" class="navbar navbar-light bg-light">
  <!-- <img id="logo" src="logo.png" alt="logo"> -->
  <a class="navbar-brand" href="index.php"><img src="logo.png" alt="logo"><b> GetPets</b></a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="admin.php">Admin</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="login.php">Sign In</a>
        <a class="dropdown-item" href="register.php">Sign Up</a>
        <div role="separator" class="dropdown-divider"></div>
        <a class="dropdown-item" href="seller.php">Seller</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#mdo">Cart</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="aboutUs.php">About US</a>
    </li>
  </ul>
</nav>

<?php include('scriptags.php'); ?>