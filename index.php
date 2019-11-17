<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <title>Home</title>
</head>

<body>
  <?php include('include/navbar.php'); ?>
  <!-- Top Div Starts -->
  <div class="col-lg-11 mx-auto mt-3 shadow-lg p-3 mb-5 bg-white rounded">
    <img src="https://advanceaccess.ie/wp-content/uploads/2017/06/Automatic-Traffic-Counter.jpg" style="width:49%; margin:0.2%;">
    <img src="https://image.shutterstock.com/image-photo/top-view-over-highway-motorway-260nw-1046202160.jpg" style="width:49%; margin:.2%;">
    <div class="row">
      <!-- News sections Starts -->
      <div class="col-lg-7 mx-auto border p-3">
        <p class="col-lg-10 col-sm-12 mx-auto text-center">Latest News</p>
        <div class="col">
          <hr>
          <form class="form-inline" action="index.php" method="post">
            <div class="form-group col-lg-7 mx-auto mb-2">
              <p>Subscribe to our news feed</p>
              <input type="text" class="form-control col-lg-12" id="email2" name="email_subscription" placeholder="youremail@email.com">
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="proceed_newLetter">Proceed</button>
          </form>
        </div>
        <?php
        include('include/conn.php');
        $query = "select * from `news` order by `sl` desc;";
        $res = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($res)) { ?>
        <div class="alert alert-light border mt-1 text-justify" role="alert">
        <?php echo $row['title']; ?><br>
          <div class="dropdown-divider"></div>
          <?php echo $row['discription']; ?>
          </div>
      <?php } ?>
      </div>
      <!-- News sections Ends -->
      <!-- Login sections Starts -->
      <div class="col-lg-4 mx-auto border p-4 rounded">
  <p class="col-lg-10 col-sm-12 mx-auto text-center"> What do we do?</p>
  <div class="col">
    <div class="alert alert-light border mt-1 text-justify" role="alert">
   * We collect the data of the problems encountered by you so that the officers can have an access to it. This saves you the hassel  of going through long procedures of filling a complaint to the concerned authorities. <br>
   <div class="dropdown-divider"></div>
   * You can mark a road as over-crowded and recommend another road for the time being. This way the information entered by you can be of help to the others.<br>
   <div class="dropdown-divider"></div>
   * You can pay your toll tax via the website and a receive a receipt for its confirmation. This would save your time so that yu don't have to wait in long queues.<br>
   <div class="dropdown-divider"></div>
   * You can also pay your challan through the website in the form of e-challans.
   <div class="dropdown-divider"></div>
   * The areas will be divided on the basis of complaints filled for that location. This will make sure that the areas with higher complaint rates cn be easier to distinguish.<br>
   <div class="dropdown-divider"></div>
   * While lodging a complaint your real-time location will be recorded. You will be given an option of uploading a picture of the concerned site while filling a complaint.<br>
   <div class="dropdown-divider"></div>
  </div>
  </div>
</div>

    </div>
  </div>
  <!-- top div ends  -->
  <div class="col-lg-11 mx-auto mt-3 shadow-lg p-3 mb-5 bg-white rounded">
    <p class="col-lg-11 mx-auto text-center">
      About us
    </p>
    <div class="col">
      <hr>
    </div>
    <div class="col-lg-11 mx-auto"><br>
      <p class="text-justify">
        India being the second most populated Nation requires better roadways for a better
        transportation experience. Also keeping in mind, the harmful effects of accident due
        to the condition of road a systemised roadways management facility is a must for better
        transportation. Therefor with our website we intend to provide a solution.<br>
        Our road management system is the most comprehensive technological solution for the
        treament and professional management of the information related to linear infrastructure
        and roadways. This is primarily designed to be easily integrated within the organizational
        systems and allows people to feed their problems and queries directly rather than going
        through a third party. It provides the user a bunch of options wherein they can either
        keep themselves updated with the latest advancements made, can easily pay road-taxes and
        toll-taxes through challan or being a responsible citizen of the country, drop their queries
        and problems to the concerned authority.<br>
      </p>
    </div>
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
  		<a href="https://github.com/hackatron19/pacman" class="text-white" target="_blank"> <span class="text-primary">&copy Team Pacman</span></a>
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
      z-index: 99999999999999999;">Donate To Team Pacman</button>

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

<?php
include('../include/functions/functions.php');
if(isset($_POST['login']))
{
    $user_email=$_POST['email_subscription'];
  	$insert_user = "INSERT INTO subscription (email) values ('$email')";
  	$finally_update = mysqli_query($mysqli, $insert_user);
    if ($finally_update == 0){
      echo "<script>alert('Updated')</script>";
    }
}
?>
