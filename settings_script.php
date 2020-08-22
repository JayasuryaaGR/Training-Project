<?php

  require("includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $old_password = $_POST['old_password'];
  $old_password = mysqli_real_escape_string($con, $old_password);
  $old_password = MD5($old_password);

  $query = "SELECT * FROM users WHERE password='$old_password'";
  $result = mysqli_query($con, $query) or die($mysqli_error($con));
  $num = mysqli_num_rows($result);

  $new_password = $_POST['new_password'];
  $new_password = mysqli_real_escape_string($con, $new_password);

  $re_type_new_password = $_POST['re_type_new_password'];
  $re_type_new_password = mysqli_real_escape_string($con, $re_type_new_password);


  if ($num == 0) {
    $m = "<span class='red'>Password doesn't exist</span>";
    header("location: settings.php?m1='$m'");
  }else if (strlen($new_password)<6) {
    $m = "<span class='red'>Password should have atleast six characters</span>";
    header("location: settings.php?m2='$m'");
  }else if ($new_password!=$re_type_new_password) {
    $m = "<span class='red'>Passwords doesn't match</span>";
    header("location: settings.php?m3='$m'");
  } else{

    $new_password = MD5($new_password);
    $query = "UPDATE users SET password = '$new_password' WHERE password='$old_password'";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: home.php');
  }

?>