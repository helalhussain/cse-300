<?php 
$c_id = $_GET['c_id'];
// echo $c_id;
// include('header.php'); 
include 'db.php';
$sql = "SELECT * FROM mycard WHERE id = '$c_id' ";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

$id = $data['ingredient_id'];
// echo $data['price'];

$sql1 = "SELECT * FROM ingredints WHERE id = '$id' ";
$result1 = mysqli_query($conn, $sql1);
$data1 = mysqli_fetch_assoc($result1);
$price = $data1['price'];
$title = $data1['title'];
// die();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Order Now</title>
</head>

<body class="main_bg">
    <div class="form">
    	<div class="col-md-2">
          <a class="btn btn-dark" href="my-card.php" style="font-size: 20px;">Back</a><br><br>
        </div>
        <div class="form-text">
            <h1>Order Now </span></h1>
            <p>Welcome to our order page.</p>
        </div>
        <div class="main-form">  
            <form method="post" action="store_booking.php?i_id=<?php echo $id;?>">  
                <div>
                    <span>Ingredient Name:</span>
                    <input type="text" name="i_name" value="<?php echo $data1['title']; ?>" id="ingredient" placeholder="Write ingredient name here..." required>
                </div>
                <div>
                    <span>Ingredient Price:</span>
                    <input type="text" name="price" id="price" value="<?php echo $data1['price']; ?>"  id="price" placeholder="Write ingredient name here..." required>
                </div>
                <div>
                    <span>Your Full Name:</span>
                    <input type="text" name="name" id="name" placeholder="Write your name here..." required>
                </div>
                <div>
                    <span>Your Mobile Number:</span>
                    <input type="text" name="number" id="number" placeholder="Write your number here..." >
                </div>

                <div>
                    <span>Item Quantity:</span>
                    <input type="number" name="item" id="item" placeholder="Write your quantity here...">
                </div>
                <div>
                    <span>Your Address:</span>
                    <input type="address" name="address" id="address" placeholder="Write your address here...">
                </div>
                
                <div style="margin-left: 28%;">
                    <span style="margin-left: 35%;">Coupon</span>
                    <input type="text" name="item" id="coupon" placeholder="Write your coupon number here...">
                    <!-- <button type="button" id="apply" class="btn btn-dark btn-sm">apply</button>
                    <div id="msg" style="display: none;">70tk discounted</div> -->
                </div>

<!--                 <div>
                    <span>What is the date of booking?</span>
                    <input type="date" name="date" id="date" placeholder="date" >
                </div> -->

                
                <div id="submit">
                    <input type="submit" value="SUBMIT" id="submit">
                </div>


            </form>
        </div>
    </div>
</body>
<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous">
      
</script>

<script type="text/javascript">
$(document).ready(function(){
  $("#submit").click(function(){
    //$('#msg').css("display", "block");
     var coupon = $('#coupon').val();
     var price = $('#price').val();
     
     $.ajax({
               url:'price-update.php',
               type: "POST",
               data: {
                       
                       coupon: coupon,
                       
                    },
               success:function(data){
                 
                  price = price - data;
                  $('#price').val(price);
               }
     
     });
  });
});
</script>
</html>