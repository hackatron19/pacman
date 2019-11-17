<?php
session_start();//session starts here

?>
<html>
<head>
    <title>
      Admin || Technica
      </title>
    <?php      include ('include/style.php'); ?>
    <link href="include/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin" method="post" action="login.php">
  <div class="text-center mb-4">
    <center>
    <img class="mb-4" src="include/logo.png" alt="" width="72" height="72">
    <h2 class="h3 mb-3 font-weight-normal">Pacman || Admin Panel</h2></center>
  </div>

  <div class="form-label-group">
    <input type="text" id="inputEmail" class="form-control"  placeholder="Username" name="email" required autofocus>
    <label for="inputEmail">Username</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
    <label for="inputPassword">Password</label>
  </div>
  <button class="btn btn-lg btn-primar" id="login" type="submit" name="login">Sign in</button>
  <!-- <p class="mt-5 mb-3 text-muted text-center">&copy; abhishek</p> -->

</form>

</body>
</html>

<?php
include('include/connection/connection.php');
if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=md5($_POST['pass']);
    $check_user="select * from users WHERE username ='$user_email' AND password='$user_pass'";
    $run=mysqli_query($mysqli,$check_user);
    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('index.php','_self')</script>";
        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.
    }
    else
    {
      echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>
