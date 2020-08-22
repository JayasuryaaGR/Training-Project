<?php

  require("includes/common.php");

  if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['e-mail'];
  $email = mysqli_real_escape_string($con, $email);

  $message = $_POST['message'];
  $message = mysqli_real_escape_string($con, $message);


  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query) or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
  	$query = "INSERT INTO users(query) VALUES('$message')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: home.php');
    
  } else {
    $m = "<span class='red'>Email doesn't exist</span>";
    header("location: contactus.php?m1='$m'");
    
  }
}
?>