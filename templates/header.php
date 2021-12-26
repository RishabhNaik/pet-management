<head>
	<title>GetPets</title>
  <?php include('csstags.php'); ?>
  
</head>
<body>
<nav id="navbar-example2" class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">GetPets</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#mdo">Admin</a>
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
<!-- <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
  <h4 id="fat">@fat</h4>
  <p>...</p>
  <h4 id="mdo">@mdo</h4>
  <p>...</p>
  <h4 id="one">one</h4>
  <p>...</p>
  <h4 id="two">two</h4>
  <p>...</p>
  <h4 id="three">three</h4>
  <p>...</p>
</div> -->

  <?php include('login.php'); ?>
  <?php include('scriptags.php'); ?>