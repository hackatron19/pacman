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
  <!-- nav bar starts -->
  <div class="col-lg-12 text-dark" style="background-color:#8183A3;">
<div class="row">
  <div class="col-lg-4">
    <img class="img-responsive rounded" src="logo.jpg" width="180px">
  </div>
  <div class="col-lg-8">

     <p style="font-size:50px; color: orange; font-family: monospace;font-weight: normal;">INTEGRATED E-CHALLAN SYSTEM</p>
    <p style="font-size:27px; color: white; font-family: monospace;font-weight: normal;">Part of Road Safety and Traffic Violation Control System</p>
  </div>
</div>
  </div>
 <!-- table -->
 <div class="container-fluid">
                      <div class="col mx-center ">




                          <table class="table table-striped mx-center">
                            <center>

                            <form action="challan.php" method="post">
                              <div class="row mx-auto mt-3">
                                <input type="text" name="vechile" class="form-control col-lg-6" placeholder="vechile Number" required>
                                <input type="submit" name="submit" class="btn btn-primary">
                              </div>

                            </form>
                          </center>
                            <?php
                            include('include/conn.php');
                              error_reporting(0);
                            if(isset($_POST['submit']))
                            {
                            $vechile=$_POST['vechile'];
                            $query = "select * from challan WHERE vehicle_number ='$vechile'";
                            $res = mysqli_query($con, $query);
                            $row = mysqli_fetch_assoc($res);
                          }

                            ?>
                                <tbody>
                                  <thead>
                                          <td colspan="4" class="border-right"><p class="text-center">Vehicle Number:</p></td>
                                          <td colspan="3"><p class="text-center ">Owner Details:</p></td>
                                  </thead>
                                     <thead>
                                          <th>Challan Number</th>
                                          <th>Offence Date</th>
                                          <th>Time</th>
                                          <th>Offence Description</th>
                                          <th>Place of Violation</th>
                                          <th>Fine Amount</th>
                                          <th>UCH</th>
                                           <th>Total</th>
                                      </thead>
                                      <tr>

                                           <td class="text-left">
                                             <input type="text" name="" value="<?php echo $row['challan_number']; ?>"readonly required>
                                           </td>
                                           <td class="text-left">
                                             <input type="text" name="" value="<?php echo $row['Offence Date']; ?>" readonly required>
                                           </td>
                                           <td class="text-left">
                                             <input type="text" name="" value="<?php echo $row['time']; ?>" readonly required>
                                           </td>
                                           <td class="text-left">
                                             <input type="text" name="" value="<?php echo $row['discription']; ?>" readonly required>
                                           </td>
                                           <td class="text-left">
                                             <input type="text" name="" value="<?php echo $row['place']; ?>" readonly required>
                                           </td>
                                           <td class="text-left">
                                             <input type="text" name="" value="<?php echo $row['amount']; ?>" readonly required>
                                           </td>
                                           <td class="text-left">
                                             <input type="text" name="" value="<?php echo $row['UCH']; ?>" readonly required>
                                           </td>
                                           <td class="text-left">
                                             <input type="text" name="" value="<?php echo $row['amount']; ?>" readonly required>
                                           </td>
                                           </tr>
                                   </tbody>
                             </table>
                             <center>
                             <a href="payment.php"><button class="btn btn-primary mt-5">Proceed to Checkout</button></a>
</center>
                           </div>

</div>
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
