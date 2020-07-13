<?php require './includes/common.php'; ?>
<?php 
$user_id = $_SESSION['user_id'];

if(!isset($_SESSION['email'])){
    
    header('Location:index.php');
}else{

$id = $_GET['ids'];


$id = explode(",",$id);

foreach ($id as $value) {
    
$query = "UPDATE `ecom`.`users_items` SET `status` = 'Confirmed' WHERE `users_items`.`items_id` = '$value' and `users_items`.`user_id`= '$user_id'";
    mysqli_query($conn,$query) or die(mysqli_error($conn));
}
} ?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | E- Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="home.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>