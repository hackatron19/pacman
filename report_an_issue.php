<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Report an issue</title>
</head>

<body>

  <?php include('include/navbar.php'); ?>

    <div class="col-lg-6 mx-auto shadow-lg p-3 mb-5 bg-white rounded mt-5 border">
        <p class="col-lg-11 mx-auto text-center">
            Report an issue
        </p>
        <div class="col">
            <hr>
        </div>
        <form action='' method='post' class="col-lg-11 mx-auto">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Name</div>
                </div>
                <input type="text" class="form-control" id="inlineFormInputGroup1" placeholder=" Full Name*">
            </div>

            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Email-ID</div>
                </div>
                <input type="text" class="form-control" id="inlineFormInputGroup2" placeholder="Email*">
            </div>

            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Mobile&nbsp&nbsp</div>
                </div>
                <input type="text" class="form-control" id="inlineFormInputGroup3" placeholder="Mobile Number *">
            </div>

            <div class="col-lg-12 mb-2">
                <div class="bg-secondary text-white text-center"><b>Location</b></div>
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
                <input type="text" class="form-control" placeholder="Full Address">
            </div>

            <textarea class="form-control" placeholder="Please type your Message *" aria-describedby="basic-addon1"
                style="resize: vertical; min-height: 230px; margin-top:10px;" name="message" required></textarea>
                <div class="form-group">
                <label for="exampleFormControlFile1">Please Upload a Photo</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            <input type="submit" class="btn btn-primary btn-lg" role="button"
                style="margin-top:10px; margin-bottom: 20px;" value="Submit">

        </form>

    </div>




  <div class="container-fulid col-lg-12 footer mt-auto py-3 bg-dark text-white">

  	<div class="float-right">
  Total Visitor Count<br><img src="https://smallseotools.com/counterDisplay?code=941017941433461f28b139e0e437dcda&style=0004&pad=5&type=page&initCount=10005" title="Web Counter" Alt="Web Counter" border="1" class="float-right">
  		<br>
  	</div>
  	<div class="row">
  		<div class="col-lg-3 col-md-5 col-sm-12">
  			<h3>Team PacMan</h3>
  			NIT, Jamshedpur<br> Jharkhand ( 831014 ) <br>
  			teampacman@gmail.com<br>
  			Whatsapp: 912XXXXXX<br>
  			Phone: 74883XXXXX
  		</div>
  		<div class="col-lg-6 d-none d-lg-block">
  			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.6847609712995!2d86.1419776146652!3d22.77707733117489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f5e4daa475a5cd%3A0xd87b53fadcd771a1!2sNIT+Jamshedpur!5e0!3m2!1sen!2sin!4v1479491936115" width="100%" height="199" frameborder="0" style="border:0" allowfullscreen></iframe></div>
  	</div>
  	<footer class="footer bg-dark mb-5">
  		<a href="http://facebook.com/" class="text-white" target="_blank"> <span class="text-primary">&copy Abhishek Kumar</span></a>
  	</footer>
  </div>
  </div>
  <a href="#">
  <button class="btn btn-warning border col-sm-12 col-lg-3 col-md-4 text-dark" style="position: fixed;
      bottom: 0px;
      right: 0px;
      height:35px;
      padding:2px;
      !important;
      z-index: 99999999999999999;">Donate Team Pacman</button>
  </a>

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
