<?php
require "includes/common.php";
?>

<?php

if (isset($_POST['submit'])) {
    $email = $_POST['e-mail'];
    $email = mysqli_real_escape_string($con, $email);

    $password = $_POST['password'];
    $password = mysqli_real_escape_string($con, $password);
    $password = MD5($password);


    $query = "SELECT * FROM users WHERE email='" . $email . "'";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    

    if ($num == 0) {
        $m = "<span class='red'>Email doesn't exist</span>";
        header("location: contactus.php?m1='$m'");
            
    } else if ($row['password']!=$password) {
        $m = "<span class='red'>Your password is incorrect</span>";
        header("location: contactus.php?m2='$m'");
        
    } else {
        
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        header('location: home.php');
    }
}
?>