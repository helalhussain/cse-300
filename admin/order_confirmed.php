<?php
include('db.php');
$id = $_GET['id'];

$sql = "UPDATE peymant SET status = 1 WHERE id = $id";
if(mysqli_query($conn,$sql))
{
	 header("Location:all_peymant.php");
}


?>