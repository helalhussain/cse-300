<?php 
include('db.php');
$id = $_GET['id']; 
// echo $id;
$sql = " DELETE FROM card_booking WHERE id = '$id' ";

if(mysqli_query($conn, $sql)){
     header("Location:../all_booking.php");
}
else{
     echo "No Deleted";
}


?>