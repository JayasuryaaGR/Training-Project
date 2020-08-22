<?php
require "includes/common.php";
if (isset($_SESSION['email']))
{
  header('location: home.php');
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Store</title>
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
<span class="glyphicon glyphicon-user"></span>Sign Up</a>
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
            <h6 class="modal-title"><b>LOGIN</b></h6>
        </div>
        <div class="modal-body">
            <form action="login_script_index.php" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control"  placeholder="Email" name="    e-mail" required = "true">
<?php
if (isset($_GET['m1'])) {
echo $_GET['m1'];
} ?>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" 
                        name="password" required = "true">
<?php
if (isset($_GET['m2'])) {
echo $_GET['m2'];
} ?>
                </div>

                <div>
                
                    <button type="submit" name="submit" class="btn btn-primary">
                        Login</button>
                </div>
            </form>
        </div>
        <div class="modal-footer"><a href="forgot.php" style="float: left; color: blue">Forgot password?</a>
        </div>
        </div>
    </div>
    </div>
</div>


<div class="container-fluid" style="text-align: center;">
    <div class="row" id="item_list">
    	<div class="col-sm-4">
            <div class="thumbnail">
                <h3>Shoe #1</h3>
                <img src="img/11.jpg" alt="Phone-1">
                    <div class="caption">
                        <h3>Rs.500/-</h3>
                        <p style="padding-top: 15px; padding-bottom: 15px">Stylish Canvas with different attractive colours</p>
                    </div>
<?php
if (isset($_SESSION['email']))
{
?>
<a data-toggle="modal" data-target="#myModal"  style="color: white"><button class="btn btn-primary form-control">Order Now!</button></a>
<?php 
} else{
?>
<a href="signup.php" style="color: white"><button class="btn btn-primary form-control">Order Now!</button></a>
<?php
}
?>
                
            </div>
        </div>

        <div class="col-sm-4">
            <div class="thumbnail">
                <h3>Shoe #2</h3>
            	<img src="img/26.jpg" alt="">
                	<div class="caption">
                        <h3>Rs.1000/-</h3>
                        <p style="padding-top: 12px; padding-bottom: 11px">Heavy boots with wooly skin</p>
                    </div>
<?php
if (isset($_SESSION['email']))
{
?>
<a data-toggle="modal" data-target="#myModal"  style="color: white"><button class="btn btn-primary form-control">Order Now!</button></a>
<?php 
} else{
?>
<a href="signup.php" style="color: white"><button class="btn btn-primary form-control">Order Now!</button></a>
<?php
}
?>
            </div> 
        </div>

        <div class="col-sm-4">
            <div class="thumbnail">
                <h3>Shoe #3</h3>
                <img src="img/27.jpg" alt="">
                	<div class="caption">
                        <h3>Rs.300/-</h3>
                        <p style="padding-top: 4px; padding-bottom: 5px">Canvas with ruly lays</p>
                    </div>
<?php
if (isset($_SESSION['email']))
{
?>
<a data-toggle="modal" data-target="#myModal"  style="color: white"><button class="btn btn-primary form-control">Order Now!</button></a>
<?php 
} else{
?>
<a href="signup.php" style="color: white"><button class="btn btn-primary form-control">Order Now!</button></a>
<?php
}
?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="text-align: center;">
    <div class="row" id="item_list">
    	<div class="col-sm-4">
            <div class="thumbnail">
                <h3>Shoe #4</h3>
                <img src="img/28.jpg" alt="Phone-1">
                    <div class="caption">
                        <h3>Rs.2500/-</h3>
                        <p style="padding-top: 21px; padding-bottom: 21px">Sports shoes with free and comfortable feel</p>
                    </div>
<?php
if (isset($_SESSION['email']))
{
?>
<a data-toggle="modal" data-target="#myModal"  style="color: white"><button class="btn btn-primary form-control">Order Now!</button></a>
<?php 
} else{
?>
<a href="signup.php" style="color: white"><button class="btn btn-primary form-control">Order Now!</button></a>
<?php
}
?>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="thumbnail">
                <h3>Shoe #5</h3>
            	<img src="img/29.jpg" alt="">
                	<div class="caption">
                        <h3>Rs.1800/-</h3>
                        <p style="padding-top: 27px; padding-bottom: 28px">Gentleman shoes for gentleman with shiny and attractive look</p>
                    </div>
<?php
if (isset($_SESSION['email']))
{
?>
<a data-toggle="modal" data-target="#myModal"  style="color: white"><button class="btn btn-primary form-control">Order Now!</button></a>
<?php 
} else{
?>
<a href="signup.php" style="color: white"><button class="btn btn-primary form-control">Order Now!</button></a>
<?php
}
?>
            </div> 
        </div>

        <div class="col-sm-4">
            <div class="thumbnail">
                <h3>Shoe #6</h3>
                <img src="img/30.png" alt="">
                	<div class="caption">
                        <h3>Rs.700/-</h3>
                        <p>Black and white shoes for school</p>
                    </div>
<?php
if (isset($_SESSION['email']))
{
?>
<a data-toggle="modal" data-target="#myModal"  style="color: white"><button class="btn btn-primary form-control">Order Now!</button></a>
<?php 
} else{
?>
<a href="signup.php" style="color: white"><button class="btn btn-primary form-control">Order Now!</button></a>
<?php
}
?>
            </div>
        </div>
    </div>
</div>

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
            		<h6><a data-toggle="modal" data-target="#myModal" style="color: white">   Login</a></h6>
            		<h6>
<?php
if (isset($_SESSION['email']))
{
?>
<a data-toggle="modal" data-target="#myModal"  style="color: white">Sign Up</a>
<?php 
} else{
?>
<a href="signup.php"  style="color: white">Sign Up</a>
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



<!--<?php
/*function Order(){

if (isset($_SESSION['email']))
{

$var1 = '<a data-toggle="modal" data-target="#myModal">';
//<span class="glyphicon glyphicon-user"></span>Sign Up</a>
return $var1;

} else{

$var2 = '<a href="signup.php">';
//<span class="glyphicon glyphicon-user"></span>Sign Up</a>
return $var2;
}
}*/
?>-->




</body>
</html>