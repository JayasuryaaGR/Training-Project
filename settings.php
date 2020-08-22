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
    <title>E-Store | Settings</title>
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
            	<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
            	<li><a href = "settings.php"><span class = "glyphicon glyphicon-user">
            	</span>Settings</a></li>
            	<li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span>Logout</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="col-xs-3">
</div>
<div class="col-xs-6">
    <h2>Change Password</h2>
    <form  action="settings_script.php" method="POST">
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Old Password" name="old_password"  required = "true">
<?php
if (isset($_GET['m1'])) {
echo $_GET['m1'];
} ?>
        </div>
        <div class="form-group">
            <input type="password" class="form-control"  placeholder="New Password" name="new_password" required = "true">
<?php
if (isset($_GET['m2'])) {
echo $_GET['m2'];
} ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Re-type New Password"  name="re_type_new_password" required = "true">
<?php
if (isset($_GET['m3'])) {
echo $_GET['m3'];
} ?>
        </div>
        <button type="submit" name="change" class="btn btn-primary">Change</button>
        
    </form>
</div>


</body>
</html>