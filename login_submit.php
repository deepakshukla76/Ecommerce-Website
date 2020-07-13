<?php
require './includes/common.php';

$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=$_POST['password'];
$password = mysqli_real_escape_string($conn, $password);
$password = MD5($password);

$query = "SELECT id,email FROM `e-store`.users WHERE `email` = '$email' and `password` = '$password'";
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
$total_rows = mysqli_num_rows($result);
if($total_rows == 0){
	$error = "<span class='red'>Please enter correct E-mail id and Password</span>";
	header('location: login.php?error=' . $error);
}else{
	$row = mysqli_fetch_array($result);
	$_SESSION['email'] = $row['email'];
	$_SESSION['user_id'] = $row['id'];
	header('Location:home.php');
}
?>