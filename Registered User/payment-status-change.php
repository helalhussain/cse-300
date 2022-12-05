<?php
include('db.php');
$id = $_POST['gift_id'];
$sql = "UPDATE gift_card SET status = 1 WHERE id= $id ";
$result = mysqli_query($conn,$sql);