<?php 
require './includes/common.php';
if(isset($_SESSION['email'])){
    header('Location: home.php');
} ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>index | E- Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php include 'includes/header.php'; ?>
<div class="container">
             <div class="row">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="">
                        <div class="caption">
                            <h3>Cannon EOS </h3>
                            <p>Price: Rs. 36000.00 </p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="">
                        <div class="caption">
                            <h3>Nikon EOS </h3>
                            <p>Price: Rs. 40,000.00 </p>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/18.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #301 </h3>
                            <p>Price: Rs. 13000.00 </p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/19.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00 </p>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>
