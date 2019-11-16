<?php
// error_reporting(0);
include('../include/functions/functions.php');
$token=$_GET['token'];
$email=$_GET['email'];
$code=$_GET['code'];
$result=verify_email($email,$token,$code);
if($result==1)
{
  echo "Email verified <a href='index.php'> Please Login</a>";
}

if($result==0)
{
  echo "Email verification faild";
}

 ?>
