<?php
require "includes/common.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>E-Store - About Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Life Style Store</title>
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
            <form action="login_script_aboutus.php" method="POST">
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
        <div class="modal-footer"><a href="forgot.php" style="float: left; color: blue">Forgot password?</a>
        </div>
        </div>
    </div>
    </div>
</div>


<!--One Row-->
<div class="container">
    	<div class="col-sm-4">
            <div class="thumbnail" style="background-color: transparent; 
            	border-color: transparent;">
            	<ul>
            		<h4><b>WHO ARE WE</b></h4>
            		<img src="img/about-img.jpg"><br><br>
                    <p>Our Mission To help you buy personalized shoes cards. FootWearWings is one of the Latest and largest gift card and eGift card sites in 2020. To make buying gift cards safe. When you buy directly from FootWearWings, we guarantee that the gift card works for life and will never lose value.FootWearWings Inc,.. The website allows consumers to search through numerous gift card websites and either purchase gift cards for a discounted price or sell them for below face value. The website contains over 100 gift cards from more than 5 different stores.</p>
            	</ul>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="thumbnail" style="background-color: transparent; 
            	border-color: transparent;">
            	<ul>
            	<h4><b>Our Development</b></h4>
            	<h4>2007</h4>
                <p>On September 15, 2007, Sachin Bansal and Binny Bansal, who met in 2005 at IIT-Delhi, launch an internet business called E-Store. The online bookstore promises to deliver anywhere in India. Within weeks, the first customer, a young bookworm from Mahbubnagar, places an order.</p><br>
            	
                <h4>2010</h4>
                <p>Pioneers Cash-on-Delivery payment mode Launches logistics arm Ekart, led by fresher Vinoth Poovalingam Introduces 30-day return policy Acquires social book recommendation portal WeRead Expands categories to include Music, Movies, Games, Electronics and Mobiles
                </p>

                <h4>2015</h4>
                    <p>Launches Home and Maternity categories Acquires AdIquity and AppIterate Launches Ad Platform and Strategic Brands Group Brand Refresh.
                    </p>

                </ul>
            </div> 
        </div>

        <div class="col-sm-4">
            <div class="thumbnail" style="background-color: transparent; 
            	border-color: transparent;">
                <ul>
            		<h4><b>Job and Opportunities</b></h4>
            		<p>E-Store is a powerful engine of growth for the national economy – revitalizing communities across America through job creation, economic investment, and innovative services.<br><br> Since 2010 E-Store has invested over $270 billion in the US, including infrastructure and compensation to our employees—$72 billion in 2018 alone.
                </p>
            	</ul>
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
            		<h6><a data-toggle="modal" data-target="#myModal" style="color: white">Login</a></h6>
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