<?php 
$id = $_GET['id'];
// echo $c_id;
// include('header.php'); 
include('db.php');

$sql = " DELETE FROM card_booking WHERE id = '$id' ;";

if(mysqli_query($conn, $sql)){
     header("Location:all_order.php");
}
else{
     echo "No Deleted";
}



?>