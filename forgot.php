<?php
require "includes/common.php";
if (isset($_SESSION['email']))
{
  echo '<center><h1 style="padding-top:200px">You are already logged-in</h1></center>';
  die();
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


<center>
<h3>Fill to set new password</h3>
<div style="padding-left: 300px; padding-right: 300px">
	<form action="forgot_script.php" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control"  placeholder="Email" name="    e-mail" required = "true">
<?php
if (isset($_GET['m1'])) {
echo $_GET['m1'];
} ?>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Create new password" name="password1" required = "true">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Re-type new password" name="password2" required = "true">
<?php
if (isset($_GET['m2'])) {
echo $_GET['m2'];
} ?>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" 
                        name="submit" required = "true" value="Set new password">	
                </div>
    </form>
</center>

</body>
</html>