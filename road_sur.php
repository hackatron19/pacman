<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <title>Road Survey</title>
</head>
<body>
  <?php include('include/navbar.php'); ?>

<div class="container one">
    <h1 class="text-center">Road Survey</h1>
  </div>

<div class="container mb-2">
                <div class="bg-secondary text-white text-center"><b>My Current Location</b></div>
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

 <form action="road_sur.php" method="post">
   <?php
   include('include/conn.php');
   $query = "select * from `traffic_sur` order by `id` desc;";
   $res = mysqli_query($con, $query);

   while ($row = mysqli_fetch_assoc($res)) {
   	?>
   <div class="form-group">
     <label for="exampleFormControlSelect1"><?php echo $row['question']; ?></label>
     <div class="form-check">
   <input class="form-check-input" type="radio" name="exampleRadios<?php echo $row['id'];?>" id="exampleRadios1" value="1">
   <label class="form-check-label" for="exampleRadios1">
     <?php echo $row['opt1']; ?>
   </label>
 </div>
 <div class="form-check">
   <input class="form-check-input" type="radio" name="exampleRadios<?php echo $row['id'];?>" id="exampleRadios2" value="2">
   <label class="form-check-label" for="exampleRadios2">
     <?php echo $row['opt2']; ?>
   </label>
 </div>
 <div class="form-check">
   <input class="form-check-input" type="radio" name="exampleRadios<?php echo $row['id'];?>" value="3">
   <label class="form-check-label" for="exampleRadios2">
       <?php echo $row['opt3']; ?>
   </label>
 </div>
 <div class="form-check">
   <input class="form-check-input" type="radio" name="exampleRadios<?php echo $row['id'];?>" id="exampleRadios2" value="4">
   <label class="form-check-label" for="exampleRadios2">
       <?php echo $row['opt4']; ?>
   </label>
 </div>
 </div>

   <?php }
   ?>




  <div class="form-group">
    <label for="exampleFormControlTextarea1"> Share Your Experience</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
   <button type="submit" class="btn btn-outline-success" name="submit_sur">Submit</button>
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


          <?php
          include 'include/conn.php';
          // session_start();
            if(isset($_POST['submit_sur'])){
              $sol1 = $_POST['exampleRadios1'];
              $sol2 = $_POST['exampleRadios2'];
              $sol3 = $_POST['exampleRadios3'];
              // $sol4 = $_POST['exampleRadios4'];
              // $sol5 = $_POST['exampleRadios5'];
              // $sol6 = $_POST['exampleRadios6'];
              // $sol7 = $_POST['exampleRadios7'];
              $email = $_SESSION['email'];
              // $message= $_POST['message'];
               $insert = "INSERT INTO traffic_sur_ans (email,sol1,sol2,sol3) values ('$email','$sol1','$sol2','$sol3')";
               $finally_update = mysqli_query($mysqli, $insert);
            }
          ?>
