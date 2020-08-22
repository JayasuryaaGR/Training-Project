<?php
require "includes/common.php";
?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Store - Contact Us</title>
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
            <!--<button type="button" class="close" data-dismiss="modal">&times</button>-->
            <h6 class="modal-title"><b>LOGIN</b></h6>
        </div>
        <div class="modal-body">
            <form action="login_script_contactus.php" method="POST">
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
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                
            </form>
        </div>
        <div class="modal-footer"><a href="forgot.php" style="float: left; color:blue">Forgot password?</a>
        </div>
        </div>
    </div>
    </div>
</div>


<div class="container">
    	<div class="col-sm-8">
            <div class="thumbnail" style="background-color: transparent; 
            	border-color: transparent;">
            	<ul>
            		<h2>LIVE SUPPORT</h2>
            		<h4>24 hours | 7 days a week | 365 days</h4>
                    <p>We are always ready and glad to help you and to clear your doubts and queries. You can either post your queries in the below form or you can also call or message us through the mention phone number or even through the mail. We have a great team which works 24*365 days to clear your queries and usually we do it within 24 hours after you post your queries. We are appreciated by several costomers for our quick and careful answers.
                    </p>
            	</ul>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="thumbnail" style="background-color: transparent; 
            	border-color: transparent;">
                <ul>
            		<img src="img/contact.png"><br><br>
            	</ul>
            </div>
        </div>
</div>


<div class="container">
<div class="container">
    	<div class="col-sm-7">
            <div class="thumbnail" style="background-color: transparent; 
            	border-color: transparent;">
            	<h2>CONTACT US</h2>
         		<form action="contactus_script.php" method="POST">
                    <div class="form-group">
                    	<label>Name</label>
                        <input class="form-control" placeholder ="Example: Xyz" 
                        name="name">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" class="form-control"  placeholder="Example: abcd@gmail.com" name="e-mail" required = "true">
<?php
if (isset($_GET['m1'])) {
echo $_GET['m1'];
} ?>
                    </div>
                    <div>
                    	<label>Message</label><br>
                    	<textarea name="message" style="width: 510px; height: 100px;"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit
                    </button>
                </form>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="thumbnail" style="background-color: transparent; 
            	border-color: transparent;">
                <ul>
            		<h2>Company Information:</h2>
            		<p>500 Impsium Dollar Street</p>
            		<p>22 Street Amit Lorem</p>
            		<p>India</p>
            		<p>Phone: +91 9999999999</p>
            		<p>Follow On: Twitter, Facebook</p>
            	</ul>
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

</body>
</html>