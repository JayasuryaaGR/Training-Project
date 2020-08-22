<?php 
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
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
        
        <div class="container-fluid" id="content">
            
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
    
                        
                        <?php
                        $user_id = $_SESSION['user_id'];
                        $email = $_SESSION['email'];
                        $query = "SELECT items.price AS Price, items.id AS Item_number FROM users_items INNER JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to Cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    
                                    <th>Price</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    
                                    
                                    echo "<tr><td>" . "#" . $row["Item_number"] . "</td><td>" . "Rs " . $row["Price"] . "</td></tr>";
                                }
                                
                                ?>
                            </tbody>
                            
                    </table>
                </div>
            </div>
        </div>
    
    </body>
</html>