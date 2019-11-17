<?php
$mysqli = new mysqli("localhost", "root", "", "pacman");


function sign_up($username,$email,$password) {
	global $mysqli;
	$password = md5($password);
	$insert_user = "INSERT INTO users (username,email,password) values ('$username','$email','$password')";
	$finally_update = mysqli_query($mysqli, $insert_user);
	if($finally_update){
     if($finally_update){
     return 1;
	}
	else {
		return 0;
		}
}
}



function login_user($email,$password) {
	global $mysqli;
		$password = md5($password);
    $check_user="select * from users WHERE email ='$email' AND password='$password'";
    $run=mysqli_query($mysqli,$check_user);
    if(mysqli_num_rows($run))
    {
       return 1 ;
    }
    else
    {
      return 0;
    }
}


function check_email($email) {
	global $mysqli;
    $check_user="select * from users WHERE email ='$email'";
    $run=mysqli_query($mysqli,$check_user);
    if(mysqli_num_rows($run))
    {
       return 1 ;
    }
    else
    {
      return 0;
    }
}

function checklogin() {
	// session_start();
	if(!$_SESSION['email'])
	{
	header("Location: login");
	}
}

function loggedin() {
	session_start();
	if(!$_SESSION['email'])
	{
	return 0;
	}
	else {
		return 1;
	}
}


?>
