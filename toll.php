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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <title>Pay Your Toll tax</title>
</head>
<body>
  <?php include('include/navbar.php'); ?>
<div class="container">
<form action="toll.php" method="post">
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Start From:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="source">
         <option selected value="">Choose...</option>
         <option value="Bhopal">Bhopal,Madhya Pradesh</option>
        <option value="Bhubaneshwar">Bhubaneshwar,Orissa</option>
        <option value="Kolkata">Kolkata,West Bengal</option>
         <option value="Raipur">Raipur,Chattisgarh</option>
         <option value="Ranchi">Ranchi,Jharkhand</option>
      </select>
    </div>
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">End To:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="destination">
        <option selected value="">Choose...</option>
        <option value="Bhopal">Bhopal,Madhya Pradesh</option>
       <option value="Bhubaneshwar">Bhubaneshwar,Orissa</option>
       <option value="Kolkata">Kolkata,West Bengal</option>
        <option value="Raipur">Raipur,Chattisgarh</option>
        <option value="Ranchi">Ranchi,Jharkhand</option>
      </select>
    </div>
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Vehicle Type:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="vehicle">
         <option selected>Choose...</option>
        <option value="cost_bus">Bus/Truck</option>
        <option value="cost_car">Car/Jeep/Van</option>
        <option value="cost_two">Two-Wheeler</option>

      </select>
    </div>
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Trip Type:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="trip">
         <option selected>Choose...</option>
        <option value="1">One-Way Trip</option>
        <option value="2">Two-Way Trip</option>

      </select>
    </div>
    <div class="col-auto">
      <div class="custom-control custom-checkbox mr-sm-2">
        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
      </div>
    </div>
    <div class="col-lg-12">
      <button type="submit" class="btn btn-large btn-primary float-left" name="submit">Submit</button>
    </div>
  </div>
</form>
<?php
include 'include/conn.php';
  if(isset($_POST['submit'])){
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $vehicle = $_POST['vehicle'];
    $trip = $_POST['trip'];
    $query="SELECT * FROM `toll` WHERE `destination` = '$destination' AND `source` = '$source'";
    $run_query = mysqli_query($mysqli,$query);
    $fetched_details= mysqli_fetch_array($run_query);
     if ($vehicle=="cost_car")
          $cost= $fetched_details['cost_car'];

      if ($vehicle=="cost_bus")
          $cost= $fetched_details['cost_bus'];

       if ($vehicle=="cost_two")
          $cost= $fetched_details['cost_two'];

          if ($trip==2) {
            $cost=$cost*1.8;
          }
    ?>

    <div class="alert alert-dark mt-3" role="alert">




      <table class="table table-striped text-center">
            <tbody>
                 <thead>
                      <th>From</th>
                      <th>Destination</th>
                      <th>Number of toll gates</th>
                      <th>Total Distance in KM</th>
                      <th>Total </th>
                  </thead>
                  <tr>

                       <td class="text-center">
                         <?php echo $source ?>
                       </td>
                       <td class="text-center">
                         <?php echo $destination ?>
                       </td>
                       <td class="text-center">
                         <?php echo $fetched_details['number'] ?>
                       </td>
                       <td class="text-center">
                         <?php echo $fetched_details['distance'] ?>
                       </td>
                       <td class="text-center">
                         <?php echo $cost; ?>
                        </td>
                       </tr>
               </tbody>
         </table>
         <a href="payment.php"><button class="btn btn-primary float-left mt-5">Proceed to Checkout</button></a>

    </div>
    <?php
  }
?>


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
