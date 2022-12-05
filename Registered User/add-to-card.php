<?php 


@session_start();
error_reporting(0);
 include('db.php');
 $email = $_SESSION['email'];
$ingredient_id=$_GET['id'];
$user_email=$email;

echo $ingredient_id;

$query = "INSERT INTO myCard VALUES(NULL,'$user_email','$ingredient_id')";
$query_run =mysqli_query($conn,$query);

if($query_run){
	?>
		 <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/RecipeBD/Registered User/my-card.php"> 

	<?php
}else{

}



?>