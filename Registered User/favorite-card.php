<?php 


@session_start();
error_reporting(0);
 include('db.php');
 $email = $_SESSION['email'];
$recipe_id=$_GET['id'];
$user_email=$email;



$query = "INSERT INTO favorite VALUES(NULL,'$user_email','$recipe_id')";
$query_run =mysqli_query($conn,$query);

if($query_run){
	?>
		 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/RecipeBD/Registered User/my-favorite.php"> 

	<?php
}else{

}



?>