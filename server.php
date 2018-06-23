<?php
session_start();
$username="";
$email="";
$errors= array();


$user="root";
$password="";
$server="localhost";
$database="information";

 $connection= mysqli_connect($server,$user,$password,$database);

if (isset($_POST['submit'])) {

$username=mysqli_real_escape_string($connection,$_POST['name']);
$password1=mysqli_real_escape_string($connection,$_POST['password']);
$password2=mysqli_real_escape_string($connection,$_POST['againpassword']);
$email=mysqli_real_escape_string($connection,$_POST['email']);

  
if (empty($username)) {
	 
	 array_push($errors,'user name is required');
	}
if (empty($email)) {
	 
	 array_push($errors,'email is required');
	}
if (empty($password1)) {
	 
	 array_push($errors,'password is required');
	}
if ($password1 !== $password2 ) {
	array_push($errors, 'your password should be match');
}


$user_check_query = "SELECT * FROM users WHERE username = '$username' AND email = '$email'";
$result = mysqli_query($connection, $user_check_query);
$user = mysqli_fetch_assoc($result);



if ($user) {
	if ($user['username'] === $username ) {
		array_push($errors, 'name already exists');
	}
	if ($user['email'] === $email ) {
		array_push($errors, 'email already exists');
	}
}


  if (count($errors) == 0) {
  	
 $password3 =md5($password1);

   $query =" insert into users(username,email,password) values ('$username','$email','$password3')";

    mysqli_query($connection , $query);
$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
    


  }

}


//login


if (isset($_POST['login'])) {
	
$email=mysqli_real_escape_string($connection,$_POST['email']);
$password1=mysqli_real_escape_string($connection,$_POST['password']);

if (empty($email)) {
	array_push($errors, 'enter email address');
}
if (empty($password1)) {
	array_push($errors, 'enter password');
}

if (count($errors) == 0) {
  	
 $password1 =md5($password1);
 $query = "SELECT * FROM users WHERE email ='$email' AND password ='$password1'";


    $msg =mysqli_query($connection , $query);
   
if (mysqli_num_rows($msg) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
}
}

  ?>