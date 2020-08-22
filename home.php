<?php
require "includes/common.php";
if (!isset($_SESSION['email']))
{
  header('location: index.php');
}
$user_id = $_SESSION['user_id']; 
?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Store | Order here</title>
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


<div class="container-fluid" style="text-align: center;">
    <div class="row" id="item_list">
    	<div class="col-sm-4">
            <div class="thumbnail">
                <h3>Shoe #1</h3>
                <img src="img/11.jpg" alt="Phone-1">
                    <div class="caption">
                        <h3>Rs.500/-</h3>
                        <p style="padding-top: 21px; padding-bottom: 21px">We have several stylish canvas with various attractive colours and mind-blowing collections. They are flexible and will have a very long life</p>
                    </div>
<?php
$query = "SELECT * FROM users_items WHERE item_id= 1 AND user_id ='$user_id' and status='Added to Cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    

    if (mysqli_num_rows($result) >= 1) {
    ?><a href="cart_add.php?id=1" name="add" class="btn btn-danger active form-control disabled">Added to cart</a><?php
    } else {
    ?><a href="cart_add.php?id=1" name="add" class="btn btn-primary form-control">Add to cart</a>
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
                        <p style="padding-top: 7px; padding-bottom: 8px">We have boots which gives roaring feeling. Apart from look and easy, these are suitable for overcoming heavy lands during rainy seasons</p>
                    </div>
                    <form action="cart_add.php" method="POST">
<?php
    $query = "SELECT * FROM users_items WHERE item_id= 2 AND user_id ='$user_id' and status='Added to Cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    

    if (mysqli_num_rows($result) >= 1) {
    ?><a href="cart_add.php?id=2" name="add" class="btn btn-danger active form-control disabled">Added to cart</a><?php
    } else {
    ?><a href="cart_add.php?id=2" name="add" class="btn btn-primary form-control">Add to cart</a>
    <?php
    }
?>
            </form>
            </div> 
        </div>

        <div class="col-sm-4">
            <div class="thumbnail">
                <h3>Shoe #3</h3>
                <img src="img/27.jpg" alt="">
                	<div class="caption">
                        <h3>Rs.300/-</h3>
                        <p>These canvas have ruly lays which are made especially for school children. They are made so as to withstand heavy play of small children</p>
                    </div>
<?php
$query = "SELECT * FROM users_items WHERE item_id= 3 AND user_id ='$user_id' and status='Added to Cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    

    if (mysqli_num_rows($result) >= 1) {
    ?><a href="cart_add.php?id=3" name="add" class="btn btn-danger active form-control disabled">Added to cart</a><?php
    } else {
    ?><a href="cart_add.php?id=3" name="add" class="btn btn-primary form-control">Add to cart</a>
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
                        <p style="padding-top: 31px; padding-bottom: 31px">These sports shoes give you very comfortable and easy feeling. These are made especially to comfort you and boost you while playing</p>
                    </div>
<?php
$query = "SELECT * FROM users_items WHERE item_id= 4 AND user_id ='$user_id' and status='Added to Cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    

    if (mysqli_num_rows($result) >= 1) {
    ?><a href="cart_add.php?id=4" name="add" class="btn btn-danger active form-control disabled">Added to cart</a><?php
    } else {
    ?><a href="cart_add.php?id=4" name="add" class="btn btn-primary form-control">Add to cart</a>
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
                        <p style="padding-top: 37px; padding-bottom: 37px">These shoes gives you perfect gentlemen look. We give attractive polish to furthur improve your gentlemanship</p>
                    </div>
<?php
$query = "SELECT * FROM users_items WHERE item_id= 5 AND user_id ='$user_id' and status='Added to Cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    

    if (mysqli_num_rows($result) >= 1) {
    ?><a href="cart_add.php?id=5" name="add" class="btn btn-danger active form-control disabled">Added to cart</a><?php
    } else {
    ?><a href="cart_add.php?id=5" name="add" class="btn btn-primary form-control">Add to cart</a>
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
                        <p>We also have black and white shoes for school children. They are made to withstand the rough and tough usage of school children</p>
                    </div>
<?php
$query = "SELECT * FROM users_items WHERE item_id= 6 AND user_id ='$user_id' and status='Added to Cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    

    if (mysqli_num_rows($result) >= 1) {
    ?><a href="cart_add.php?id=6" name="add" class="btn btn-danger active form-control disabled">Added to cart</a><?php
    } else {
    ?><a href="cart_add.php?id=6" name="add" class="btn btn-primary form-control">Add to cart</a>
    <?php
    }
?>
            </div>
        </div>
    </div>
</div>


</body>
</html>