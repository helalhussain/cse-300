<?php
 include('db.php');

$del_id=$_GET['id'];


$dis = 0;
$disable_query = "UPDATE user_recipe SET status='$dis' WHERE id='$del_id'";
$del =mysqli_query($conn,$disable_query);

if($del){
	?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/RecipeBD/admin/user-recipe.php"> 

	<?php
}else{

}






 ?>