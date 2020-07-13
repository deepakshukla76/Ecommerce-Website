<?php require './includes/common.php'; ?>

<?php
if(isset($_POST)){
    $name=$_POST['name'];
    $name=mysqli_real_escape_string($conn, $name);
    $email=$_POST['email'];
    $email = mysqli_real_escape_string($conn, $email);
    $message=$_POST['message'];
    $message=mysqli_real_escape_string($conn,$message)
    $query="INSERT INTO `contact` ( `name`, `email`, `message`) VALUES ('$name','$email','message')"; 
    mysqli_query($conn,$query) or die(mysqli_error($conn));
    $error = "<span class='red'>Message Sent!</span>";
	header('location: contact.php?error=' . $error);
	$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
}
?>