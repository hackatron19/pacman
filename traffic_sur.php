<?php
	session_start(); ?>
<?php    include('include/functions/functions.php');
if(!$_SESSION['email'])
{
header("Location: login");
// echo $_SESSION['email'];
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Traffic Survey</title>
</head>

<body>
  <?php include('include/navbar.php'); ?>
  <div class="container one">
      <h1 class="text-center">Traffic Survey</h1>
    </div>
<div class="container mb-2">
                <div class="row mt-2">
                    <div class="col-lg-6">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Longitude</div>
                            </div>
                            <input type="text" class="form-control" id="longitude" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Latitude</div>
                            </div>
                            <input type="text" class="form-control" id="latitude" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
              <form>
  <div class="form-group">
    <label for="exampleFormControlSelect1">By how many hours does the traffic delay you?</label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
  <label class="form-check-label" for="exampleRadios1">
    On-Time
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Less than 30 minutes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    30 minutes-1 hour
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    More than 1 hour
  </label>
</div>
</div>
</form>

 <form>
  <div class="form-group">
    <label for="exampleFormControlSelect1"> What is the main cause of traffic congestion along your daily route?</label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
  <label class="form-check-label" for="exampleRadios1">
    Poor weather conditions
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Construction & road works
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Poorly timed traffic lights
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Traffic collisions & vehicle breakdowns
  </label>
</div>
</div>
</form>

 <form>
  <div class="form-group">
    <label for="exampleFormControlSelect1">What is the best solution to traffic congestion? </label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
  <label class="form-check-label" for="exampleRadios1">
   A more efficient public transport system
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
   Faster assistance to vehicles involved in a collision
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Traffic lights timed to control traffic
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Carpooling
  </label>
</div>
</div>
</form>

 <form>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Does this website cater to your needs?</label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
  <label class="form-check-label" for="exampleRadios1">
    Yes, it does
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Yes, but I want the page to have additional features
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    No, it doesn't
  </label>
</div>
</div>
</form>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"> Share Your Experience</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
   <button type="submit" class="btn btn-outline-success">Submit</button>
  </div>
</form>

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
<script>
        var x = document.getElementById("latitude");
        var y = document.getElementById("longitude");
        function getLocation() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
          } else {
            // x.innerHTML = "Geolocation is not supported by this browser.";
          }
        }
        function showPosition(position) {
          x.value = position.coords.latitude;
          y.value =position.coords.longitude;
        }
        getLocation();
        </script>
