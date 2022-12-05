<?php 
$c_id = $_GET['c_id'];
// echo $c_id;
// include('header.php'); 
include('db.php');

$sql = " DELETE FROM myCard WHERE id = '$c_id' ;";

if(mysqli_query($conn, $sql)){
     header("Location:my-card.php");
}
else{
     echo "No Deleted";
}



?>