

    <?php



include("db.php");


$id=$_GET['id'];

$status = 0;
$disable_query = "UPDATE users SET status='$status' WHERE id='$id'";
$disable =mysqli_query($conn,$disable_query);
if($disable){
	?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/RecipeBD/admin/all-user.php">
      

	<?php
}else{

}






 ?>