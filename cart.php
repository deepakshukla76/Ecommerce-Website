<?php require './includes/common.php'; ?>
<?php 

if(!isset($_SESSION['email'])){

    header('Location:index.php');
}

$user_id = $_SESSION['user_id'];

$query = "SELECT items.id, items.name, items.price FROM users_items INNER JOIN users ON users.id = users_items.user_id INNER JOIN items ON items.id = users_items.items_id WHERE users_items.user_id ='$user_id'";

$result = mysqli_query($conn,$query) or die(mysqli_error($conn));

$total_rows = mysqli_num_rows($result);



?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | E- Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php include 'includes/header.php'; ?>
        <div class="container" id="content">	
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <th>Item Number</th><th>Item Name</th><th>Price</th><th>Remove Item</th>
                        </thead>
                        <tbody>
                            <?php 

                                if($total_rows==0){
                                    echo '<p class="text-danger" style="text-align: center; font-size: 2em;">Add items to the cart first!<p>';
                                }else{

                                $i=1;
                                $sum=0;
                                $ids="";
                                while ($i<=$total_rows) {
                                    $row = mysqli_fetch_array($result);
                            ?>
                                <tr>

                                    <td><?php echo $row['id'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['price'];?></td>
                                    <td><a href='cart-remove.php?id=<?php echo $row['id'];?>'class="remove_item_link">Remove</a></td>
                                </tr>
                            <?php 
                                    $sum = $sum + $row['price'];
                                    if($i<$total_rows){
                                    $ids=$ids.$row['id'].',';
                                    }else{
                                        $ids=$ids.$row['id'];
                                    }
                                    $i=$i+1;
                                }  
                            ?>
                            <tr>
                                <td></td><td>Total</td><td>Rs <?php echo $sum; } ?> </td><td><a href='success.php?ids=<?php echo $ids; ?>' class='btn btn-primary'>Confirm Order</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>