<?php
require "includes/common.php";
if (!isset($_SESSION['email']))
{
  header('location: index.php');
}

?>


<!DOCTYPE html>
<html>
<head>
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
            	<li><a href = "settings.php"><span class = "glyphicon glyphicon-user">
            	</span>Settings</a></li>
            	<li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span>Logout</a></li>
            </ul>
        </div>
    </div>
</nav>


<center>
    <h1>
        Thank You for ordering in E-Store.<br> The order shall be delivered to you shortly.<br>
        <a href="home.php"><button class="btn btn-success">Click here to order some more items</button></a>
    </h1>
</center>


</body>
</html>