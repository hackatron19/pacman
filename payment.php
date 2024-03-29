<?php
	session_start(); ?>
<?php    include('include/functions/functions.php');
if(!$_SESSION['email'])
{
header("Location: login");
// echo $_SESSION['email'];
}
?><!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Toll Tax</title>
</head>
<body>
  <!-- nav bar starts -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#090d4b;">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="try1.html">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery1.html">Gallery</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Complaints
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="complaint.html">Traffic</a>
            <a class="dropdown-item" href="complaint.html">Road conditions</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="complaint.html">Other</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            More
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Toll Tax Collection</a>
            <a class="dropdown-item" href="#">Challan Collection</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="traffic_survey.html">Traffic Survey</a>
            <a class="dropdown-item" href="road_survey.html">Street Survey</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 float-right" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <style type="text/css">
  body { margin-top:20px; }
.panel-title {display: inline;font-weight: bold;}
.checkbox.pull-right { margin: 0; }
.pl-ziro { padding-left: 0px;
width:30% ;}
</style>
<div class="container">
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 mx-auto mt-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                </div>
                 <div class="dropdown-divider"></div>
                <div class="panel-body">
                    <form role="form">
                      <div class="form-group">
                          <label for="cardNumber">
                              CARD NUMBER</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                  required autofocus />
                              <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="holdername">
                              Card Holder Name</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="holdername" placeholder="Card Holder Name"
                                  required autofocus />
                              <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                          </div>
                      </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group ml-2">
                                <label for="expityMonth">
                                    EXPIRY DATE</label>
                                <div class="">
                                  <div class="row">
                                    <input type="text" class="form-control col-lg-6 col-xs-6" id="expityMonth" placeholder="MM" required />
                                    <input type="text" class="form-control  col-lg-6 col-xs-6" id="expityYear" placeholder="YY" required />
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CVV</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CVV Number" required />
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <br/>
            <a href="" class="btn btn-success btn-lg btn-block" role="button">Pay</a>
        </div>
    </div>
</div>
</div>
<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>
