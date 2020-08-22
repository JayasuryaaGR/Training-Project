<?php

    require("includes/common.php");

if(isset($_POST['submit'])){

	$email = $_POST['e-mail'];
    $email = mysqli_real_escape_string($con, $email);

    $password1 = $_POST['password1'];
    $password1 = mysqli_real_escape_string($con, $password1);

    $password2 = $_POST['password2'];
    $password2 = mysqli_real_escape_string($con, $password2);

	$query = "SELECT * FROM users WHERE email='" . $email . "'";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);

    if ($num == 0) {
        
        $m = "<span class='red'>e-mail doesn't exist</span>";
    header("location: forgot.php?m1='$m'");
    } else if($password1 != $password2) {
  		$m = "<span class='red'>Passwords don't match</span>";
    header("location: forgot.php?m2='$m'");
    } else {
    	$password1 = MD5($password1);
    $query = "UPDATE users SET password = '$password1' WHERE email='$email'";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: index.php');
    }
}
?>