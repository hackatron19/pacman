

<?php
$con = mysqli_connect("localhost","root","");
  if(!$con)
  {
    die('could not connect to db');
  }
  else
  	//echo 'connected';
   $db = mysqli_select_db($con,'pacman');
//   $db = mysqli_select_db($con,'id9998956_test');
if(!$db){
die('could not select db');
}
?>
<?php
    $mysqli = new mysqli("localhost", "root", "", "pacman");
?>
