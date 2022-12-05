<?php 
$c_id = $_GET['id'];
// echo $c_id;
include('header.php'); 

	$sql2 = "SELECT * FROM ingredints WHERE id = '$c_id' ";
	$result2 = mysqli_query($conn, $sql2);
	$data = mysqli_fetch_assoc($result2);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
 <section>
    <div class="category" style=" text-align: center;">
          <h3 style="font-size: 22px;"><?php echo $data['title'];?> </h3>
    </div>

    <div class="row" style="margin-left: 150px;"> 

        <div class="col-md-2">
          <a class="btn btn-success" href="ingredient.php" style="font-size: 16px; margin-left: 30px;">Back </a><br><br>
        </div>
        <div class="col-md-10">
           <img src="../admin/<?php echo $data['image']; ?>" width="640" height="200">
        </div> 
    </div>
    <div class="row" style="margin-left: 160px; margin-top: 15px;">
        <div class="col-md-2" style="margin-left: 530px;">
           <p> </p>
           <p style="margin-right: 20px; font-size: 16px;">Quantity: <?php echo $data['quantity']; ?> <br>Price: <?php echo $data['price']; ?> </p>
        </div> <br><br><br>
        <div class="col-md-10">
        	<h6><?php echo $data['description']; ?></h6>
          <p> </p>
        </div>
        
    </div>
</section>

</body>
</html>
