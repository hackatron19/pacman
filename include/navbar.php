<!-- nav bar starts -->
<?php
	session_start(); ?>
<div class="col-lg-12 text-dark " style="background-color:#8183A3;">
<div class="row">
<div class="col-lg-4">
  <img class="img-responsive rounded" src="logo.jpg" width="200px">
</div>
<div class="col-lg-8">
  <p style="font-size:90px; color: orange; font-family: monospace;font-weight: bold">TEAM PACMAN</p>
  <p style="font-size:30px; color: white; font-family: monospace;font-weight: normal; font-family: serif;">Road Oversight And Development Administration</p>
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark  site-header sticky-top" style="background-color:#090d4b;">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="report_an_issue.php">Report</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Collections
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="toll.php">Toll Tax Collection</a>
          <a class="dropdown-item" href="#">Challan Collection</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Survey
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="traffic_sur.php">Traffic Survey</a>
          <a class="dropdown-item" href="road_sur.php">Street Survey</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact us</a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">




      <?php
      if(!$_SESSION['email'])
      { ?>
      <a href="login"><button class="btn btn-outline-success my-2 my-sm-0 float-right">Login</button></a>
      <a href="login/join.php"><button class="btn btn-outline-danger my-2 my-sm-0 float-right ml-2">Signup</button></a>
<?php }
else {
  ?>
  <a href="login/logout.php"><button class="btn btn-outline-success my-2 my-sm-0 float-right">Logout</button></a>
<?php }
?>
    </div>
  </div>
</nav>
<!-- Nav bar ends -->
