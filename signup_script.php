<?php
require './includes/common.php';
$name=$_POST['name'];
$name = mysqli_real_escape_string($conn, $name);


$email=mysqli_real_escape_string($conn,$_POST['email']);

$password=$_POST['password'];
$password = mysqli_real_escape_string($conn, $password);
$password = MD5($password);

$contact=$_POST['contact'];
$contact = mysqli_real_escape_string($conn, $contact);

$city=$_POST['city'];
$city = mysqli_real_escape_string($conn, $city);

$address=$_POST['address'];
$address = mysqli_real_escape_string($conn, $address);

$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[789][0-9]{9}$/";

$query="SELECT id FROM users WHERE users.email = '$email'";
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
$total_rows = mysqli_num_rows($result);
if($total_rows>0){
	$error = "<span class='red'>Email already exists.</span>";
	header('location: signup.php?error=' . $error);
}else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
}else{
	$insert="INSERT INTO `users` (`name`, `email`, `password`, `contact`, `city`, `address`) VALUES ('$name','$email','$password','$contact','$city','$address')";
	mysqli_query($conn,$insert) or die(mysqli_error($conn));

	$id=mysqli_insert_id($conn); 
	
	$_SESSION['email'] = $email;
	$_SESSION['user_id'] = $id;
	header('Location:home.php');	
}

?>