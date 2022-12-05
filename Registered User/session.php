<?php 
session_start();
error_reporting(0);

$email =$_SESSION['email'];
if($email==true)
{

}else{
	header('location:../Login.php');
}

$query ="SELECT * FROM users WHERE email='$email'";
$data =mysqli_query($conn,$query);
$login_email = mysqli_fetch_assoc($data);

?>