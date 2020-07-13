<?php require './includes/common.php';?>
<?php
if(!isset($_SESSION['email'])){

    header('Location:index.php');
}

$email=$_SESSION['email'];
$email=mysqli_real_escape_string($conn, $email);

$oldPassword =$_POST['old-password'];
$oldPassword =mysqli_real_escape_string($conn, $oldPassword);
$oldPassword = MD5($oldPassword);

$newPassword = $_POST['password'];
$newPassword =mysqli_real_escape_string($conn, $newPassword);
$newPassword = MD5($newPassword);

$rePassword = $_POST['password1'];
$rePassword = mysqli_real_escape_string($conn, $rePassword);
$rePassword = MD5($rePassword);

if(strlen($newPassword)<5){

	header('location: settings.php?error=Weak Password must be greater then 6 characters.');

}else if(strcmp($newPassword,$rePassword) != 0)
{
     header('location: settings.php?error=The two passwords don\'t match');
} else 
{
    $fetch_query = "SELECT password FROM users WHERE `email` = '$email'";
	$result=mysqli_query($conn,$fetch_query) or die(mysqli_error($conn));
	$row=mysqli_fetch_array($result);
	print_r($row);
	if($row['password']==$oldPassword){
		echo 'matched';
		$update_query="UPDATE `users` SET `password` = '$newPassword' WHERE `users`.`email` ='$email'";
		mysqli_query($conn,$update_query) or die(mysqli_error($conn));
		 header('location: settings.php?error=Password Updated');
	}else{
		header('location: settings.php?error=Wrong Old Password');
	}
}
?>
