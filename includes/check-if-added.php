<?php
function check_if_added_to_cart($item_id,$user_id){
	$conn = mysqli_connect('localhost','root','','e-store') or die(mysqli_error($conn)); 
	$query = "SELECT * FROM users_items WHERE `items_id`='$item_id' AND `user_id`='$user_id' AND `status`='Added to cart'";
	$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
	$total_rows=mysqli_num_rows($result);
	if($total_rows>=1){
		return 1;
	}else{
		return 0;
	}
}
?>