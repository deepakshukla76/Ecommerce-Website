<?php require_once('./includes/common.php'); ?>
<?php $user_id = $_SESSION['user_id']; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | E- Store </title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php include 'includes/header.php'; ?>
    <?php require 'includes/check-if-added.php'; ?>
        <div class="container">
             <div class="row">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="">
                        <div class="caption">
                            <h3>Cannon EOS </h3>
                            <p>Price: Rs. 36000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                             <?php
                             } else {
                             if (check_if_added_to_cart(1,$user_id)) { 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                             } else {
                             ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                             <?php
                             }
                             }
                             ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="">
                        <div class="caption">
                            <h3>Nikon EOS </h3>
                            <p>Price: Rs. 40,000.00 </p>
                             <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                             <?php
                             } else {
                             if (check_if_added_to_cart(2,$user_id)) { 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                             } else {
                             ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                             <?php
                             }
                             }
                             ?>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                             <?php
                             } else {
                             if (check_if_added_to_cart(3,$user_id)) { 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                             } else {
                             ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                             <?php
                             }
                             }
                             ?>
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
                            <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                             <?php
                             } else {
                             if (check_if_added_to_cart(4,$user_id)) { 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                             } else {
                             ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                             <?php
                             }
                             }
                             ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/18.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #301 </h3>
                            <p>Price: Rs. 13000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                             <?php
                             } else {
                             if (check_if_added_to_cart(5,$user_id)) { 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                             } else {
                             ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                             <?php
                             }
                             }
                             ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/19.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                             <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
                            Now</a></p>
                             <?php
                             } else {
                             if (check_if_added_to_cart(6,$user_id)) { 
                             echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
                            cart</a>';
                             } else {
                             ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block
                            btn-primary">Add to cart</a>
                             <?php
                             }
                             }
                             ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>
