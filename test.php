<?php
require "includes/common.php";
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Store - Sign Up</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">E-Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
            <li>
<?php
if (isset($_SESSION['email']))
{
?>
<a data-toggle="modal" data-target="#myModal">
<span class="glyphicon glyphicon-log-in"></span>Sign Up</a>
<?php 
} else{
?>
<a href="signup.php">
<span class="glyphicon glyphicon-user"></span>Sign Up</a>
<?php
}
?>
            </li>
            <li><a data-toggle="modal" data-target="#myModal">
                <span class="glyphicon glyphicon-log-in"></span>Log In</a>
            </li>
            <li><a href="aboutus.php">
                <span class="glyphicon glyphicon-eye-open"></span>About Us</a>
            </li>
            <li><a href="contactus.php">
                    <span class="glyphicon glyphicon-phone-alt"></span>Contact Us
                </a>
            </li>
            </ul>
        </div>
    </div>
</nav>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <!--<button type="button" class="close" data-dismiss="modal">&times</button>-->
            <h6 class="modal-title"><b>LOGIN</b></h6>
        </div>
        <div class="modal-body">
            <form action="login_script.php" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control"  placeholder="Email" name="    e-mail" required = "true">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" 
                        name="password" required = "true">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                <?php echo $_GET['error']; ?>
            </form>
        </div>
        <div class="modal-footer"><a href="forgot.php" style="float: left;">Forgot password?</a>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="container">
<div class="container">
<div class="row">
        <div class="col-sm-6">
            <div class="thumbnail" style="background-color: transparent; 
                border-color: transparent;">
                <img src="img/yess.jpg">
            </div>
        </div>

        <div class="col-sm-6">
            <div class="thumbnail" style="background-color: transparent; 
                border-color: transparent;">
                <h1>SIGN UP</h1>
                <form action="" method="POST"> 
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">

<?php
if (isset($_GET['m1'])) {
echo $_GET['m1'];
} ?>

                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" 
                                required = "true">
<?php
if (isset($_GET['m3'])) {
echo $_GET['m3'];
} ?>
                         </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">

<?php
if (isset($_GET['m2'])) {
echo $_GET['m2'];
} ?>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>

                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary" style="float: right;">Submit</button>
                        </form>
            </div>
        </div>
</div>
</div>
</div>

<br>
<br>
<footer>
    <div class="row" id="footer">
        <div class="col-sm-4">
            <div class="thumbnail" style="background-color: transparent; 
                border-color: transparent;">
                <ul>
                    <h4><b>Information</b></h4>
                    <h6><a href="aboutus.php" style="color: white">About Us</a></h6>
                    <h6><a href="contactus.php" style="color: white">Contact us</a></h6>
                </ul>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="thumbnail" style="background-color: transparent; 
                border-color: transparent;">
                <ul>
                    <h4><b>My Account</b></h4>
                    <h6><a data-toggle="modal" data-target="#myModal" style="color: white">Login</a></h6>
                    <h6>
<?php
if (isset($_SESSION['email']))
{
?>
<a data-toggle="modal" data-target="#myModal" style="color: white">Sign Up</a>
<?php 
} else{
?>
<a href="signup.php" style="color: white">Sign Up</a>
<?php
}
?>      
                    </h6>
                </ul>
            </div> 
        </div>

        <div class="col-sm-4">
            <div class="thumbnail" style="background-color: transparent; 
                border-color: transparent;">
                <ul>
                    <h4><b>Contact</b></h4>
                    <h6 style="color: white">+91 9999999999</h6>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php

require("includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
if (isset($_POST['submit'])) {
  
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['e-mail'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  

  if (strlen($password)<6) {
    $m = "<span class='red'>Password should have atleast six characters</span>";
    header("location: signup.php?m3='$m'");
  } else{
    $password = MD5($password);
  }

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query) or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header("location: signup.php?m1='$m'");
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header("location: signup.php?m2=$m");
  } else {
    
    $query = "INSERT INTO users(name, email, password, contact, city, address)
      VALUES('$name','$email','$password','$contact','$city','$address')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: home.php');
  }
}
?>

</body>
</html>