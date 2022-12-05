<?php 
include('db.php');
$c_id = $_GET['i_id'];
$u_name = $_POST['name'];
$u_number = $_POST['number'];
$i_name = $_POST['i_name'];
$price = $_POST['price'];
$address = $_POST['address'];
// echo $c_id;
// echo $address;
//  die();

$sql = "INSERT INTO card_booking (id,c_id,u_name,u_number,i_name, price, address) VALUES (NULL,'$c_id', '$u_name', '$u_number','$i_name','$price','$address')";
// $sql = " DELETE FROM myCard WHERE id = '$c_id' ;";

if(mysqli_query($conn, $sql)){
     header("Location:all_booking.php");
}
else{
     echo "No Deleted";
}


?>