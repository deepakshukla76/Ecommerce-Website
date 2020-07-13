<?php
require './includes/common.php';
$user_id=$_SESSION['user_id'];
$item_id=$_GET['id'];
$delete_query="DELETE FROM `users_items` WHERE `users_items`.`items_id` = '$item_id' and `users_items`.`user_id` = '$user_id'";
mysqli_query($conn,$delete_query) or die(mysqli_error($conn));
header('Location:cart.php');
?>