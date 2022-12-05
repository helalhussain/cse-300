<?php

include("db.php");
$id=$_GET['id'];
$delete_query = "DELETE from users  WHERE id='$id'";
$del = mysqli_query($conn,$delete_query);
if($del){
	?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/RecipeBD/admin/all-user.php"> 

	<?php
}else{

}

?>