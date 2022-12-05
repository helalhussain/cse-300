<?php
 include('db.php');

$del_id=$_GET['id'];


$query = "DELETE FROM books WHERE id='$del_id'";
$del =mysqli_query($conn,$query);

if($del){
	?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/RecipeBD/admin/all-book.php"> 

	<?php
}else{

}






 ?>