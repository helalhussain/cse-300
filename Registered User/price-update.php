<?php
include('db.php');
$token = $_POST['coupon'];
$sql = "SELECT * FROM approved_gift_card WHERE token = '$token'";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
if($result){
    echo $data['gift_price'];
}