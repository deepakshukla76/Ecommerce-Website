<?php require './includes/common.php'; ?>
<?php 
$user_id=$_SESSION['user_id'];
$item_id=$_GET['id'];
$insert_query="INSERT INTO users_items(user_id, items_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
mysqli_query($conn,$insert_query) or die(mysqli_error($conn));
header('Location:home.php');
?>
