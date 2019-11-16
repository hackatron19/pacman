<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Home</title>
</head>

<body>
  <?php include('include/navbar.php'); ?>
<div class="container mt-3">
<form>
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Start From:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
         <option selected>Choose...</option>
        <option value="1">Bhubaneshwar,Orissa</option>
        <option value="2">Kolkata,West Bengal</option>
        <option value="3">Patna,Bihar</option>
         <option value="4">Ranchi,Jharkhand</option>
         <option value="5">Raipur,Chattisgarh</option>
      </select>
    </div>
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">End To:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
         <option selected>Choose...</option>
        <option value="1">A</option>
        <option value="2"></option>
        <option value="3">Kolkata,West Bengal</option>
         <option value="4">Ranchi</option>
         <option value="5"></option>
      </select>
    </div>
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Vehicle Type:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
         <option selected>Choose...</option>
        <option value="1">Bus/Truck</option>
        <option value="2">Car/Jeep/Van</option>
        <option value="3">Two-Wheeler</option>

      </select>
    </div>
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Trip Type:</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
         <option selected>Choose...</option>
        <option value="1">One-Way Trip</option>
        <option value="2">Two-Way Trip</option>

      </select>
    </div>
    <div class="col-auto my-1">
      <div class="custom-control custom-checkbox mr-sm-2">
        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
        <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
      </div>
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary float-right">Submit</button>
    </div>
  </div>
</form>

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
