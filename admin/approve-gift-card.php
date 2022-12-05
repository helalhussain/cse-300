<?php 
include('db.php');
$gift_id = $_POST['gift_id'];
$gift_price = $_POST['gift_price'];

$rand = rand(11111, 89999999999);
$sql = "INSERT INTO approved_gift_card(gift_id, gift_price, token) VALUES ('$gift_id','$gift_price','$rand')";

$updateSql = "UPDATE gift_card SET view =1 WHERE id= '$gift_id'";
if(mysqli_query($conn,$sql) and mysqli_query($conn,$updateSql)){
    echo 1;
}else
    echo 0;